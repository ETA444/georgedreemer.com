#!/usr/bin/env python3
"""Deterministic, local HTML-to-Markdown exporter for georgedreemer.com."""

from __future__ import annotations

import argparse
import hashlib
import html
import json
import re
import sys
from pathlib import Path
from urllib.parse import quote, urljoin, urlsplit, urlunsplit

try:
    from bs4 import BeautifulSoup, Comment, Tag
    from bs4.element import NavigableString
except ImportError as err:
    raise SystemExit("Missing beautifulsoup4. Run: bash scripts/build-markdown.sh") from err

VERSION = "1.1.0"
ROOT = Path(__file__).resolve().parent.parent
SKIP_TAGS = {
    "script",
    "style",
    "svg",
    "template",
    "noscript",
    "canvas",
    "input",
    "select",
    "textarea",
}
SKIP_CLASSES = {
    "info-tip",
    "lens-toggle",
    "ability-lens-note",
    "hero__scroll",
    "mm-library__controls",
    "thesis-expose__picker",
    "thesis-expose__reset",
    "work-card__cta",
    "degree-card__cta",
}
BLOCK_TAGS = {
    "div",
    "section",
    "article",
    "header",
    "footer",
    "aside",
    "nav",
    "main",
    "figure",
    "figcaption",
    "fieldset",
    "legend",
    "summary",
    "dt",
    "dd",
    "li",
}


def compact(s):
    return re.sub(r"\s+", " ", s).strip()


def escaped(s):
    s = s.replace("\\", "\\\\")
    return re.sub(r"([`*_[\]<>#])", r"\\\1", s)


def clean(s):
    lines, fence = [], False
    for line in s.splitlines():
        if re.match(r"^\s*`{3,}", line):
            fence = not fence
        lines.append(line if fence else line.rstrip())
    return re.sub(r"\n{3,}", "\n\n", "\n".join(lines)).strip()


def classes(t):
    return set(t.get("class", []))


def quoted(s):
    return json.dumps(str(s), ensure_ascii=False)


class Renderer:
    def __init__(self, url, keep_anchors=False):
        self.url, self.keep_anchors = url, keep_anchors
        self.warnings, self.media, self.anchors = [], [], set()

    def warn(self, s):
        if s not in self.warnings:
            self.warnings.append(s)

    def link_url(self, href):
        href = href.strip()
        if not href:
            return None
        absolute = urljoin(self.url, href)
        if urlsplit(absolute).scheme.lower() not in {"http", "https", "mailto", "tel"}:
            self.warn("Skipped unsupported URL scheme: " + href[:60])
            return None
        return absolute

    def link(self, label, href):
        url = self.link_url(href)
        if not url:
            return label
        return f"[{label}](<{quote(url, safe=':/?#[]@!$&' + chr(39) + '()*+,;=%~-._')}>)"

    def children(self, t):
        return "".join(self.render(x) for x in t.children)

    def anchor(self, t):
        # Raw HTML anchors are opt-in (--anchors); default output is pure Markdown.
        value = t.get("id")
        if not self.keep_anchors or not value or value in self.anchors:
            return ""
        self.anchors.add(value)
        return '\n\n<a id="' + html.escape(value, quote=True) + '"></a>\n\n'

    def block(self, text):
        text = text.strip()
        return "\n\n" + text + "\n\n" if text else ""

    def render(self, t):
        if isinstance(t, Comment):
            return ""
        if isinstance(t, NavigableString):
            return escaped(re.sub(r"\s+", " ", str(t)))
        if not isinstance(t, Tag):
            return ""
        name, cs = t.name, classes(t)
        if t.get("data-md") == "exclude":
            return ""
        if name in SKIP_TAGS or cs & SKIP_CLASSES:
            return ""
        if t.get("aria-hidden") == "true" and not (
            name in {"section", "article"}
            or any("panel" in c or "slide" in c or "accordion__body" in c for c in cs)
        ):
            return ""
        if (
            t.has_attr("hidden")
            and not (cs & {"info-tip__panel"})
            and name not in {"section", "article", "div", "details"}
        ):
            self.warn("Skipped hidden interface element: " + name)
            return ""
        anchor = (
            self.anchor(t)
            if t.get("id") and (name in BLOCK_TAGS or re.fullmatch(r"h[1-6]", name))
            else ""
        )
        if name == "button":
            label = t.select_one(".story-accordion__trigger-label")
            if label:
                return self.block("#### " + compact(self.children(label)))
            self.warn("Omitted interactive controls (buttons); no JavaScript is executed.")
            return ""
        if "instagram-media" in cs:
            href = t.get("data-instgrm-permalink")
            if href:
                return self.block(self.link("Instagram post", href))
            self.warn("Instagram embed has no permalink; fallback content retained.")
        if name in {"iframe", "video", "audio"}:
            self.media.append(name)
            href = t.get("src")
            if not href and t.find("source"):
                href = t.find("source").get("src")
            if not href:
                self.warn("Embedded media has no static src: " + name)
                return ""
            u = urlsplit(href)
            if u.hostname in {
                "www.youtube.com",
                "youtube.com",
                "www.youtube-nocookie.com",
            } and u.path.startswith("/embed/"):
                href = "https://www.youtube.com/watch?v=" + u.path.split("/")[-1]
            label = (
                t.get("title")
                or t.get("aria-label")
                or {"iframe": "Embedded resource", "video": "Video", "audio": "Audio"}[name]
            )
            return self.block(self.link(escaped(compact(label)), href))
        if name == "source":
            return ""
        if name == "img":
            alt = compact(t.get("alt", ""))
            badge_parent = t.find_parent(
                class_=lambda c: c and ("stack-badge" in c or "credential-card__icon" in c)
            )
            if not alt or badge_parent:
                return ""
            href = t.get("src") or t.get("data-src")
            if not href or href.startswith("data:"):
                return escaped(alt)
            self.media.append("image")
            if t.find_parent("a"):
                return escaped(alt)
            return self.block("Image: " + self.link(escaped(alt), href))
        if name == "pre":
            raw = t.get_text().strip("\n")
            fence = "`" * max(3, max((len(x) + 1 for x in re.findall(r"`+", raw)), default=0))
            code = t.find("code")
            lang = (
                next(
                    (c[9:] for c in code.get("class", []) if c.startswith("language-")),
                    "",
                )
                if code
                else ""
            )
            return self.block(fence + re.sub(r"[^\w+-]", "", lang) + "\n" + raw + "\n" + fence)
        if name == "code":
            raw = compact(t.get_text())
            fence = "`" * max(1, max((len(x) + 1 for x in re.findall(r"`+", raw)), default=0))
            pad = " " if raw.startswith("`") or raw.endswith("`") else ""
            return fence + pad + raw + pad + fence
        if name == "br":
            return "\n"
        if name == "hr":
            return self.block("---")
        if re.fullmatch(r"h[1-6]", name):
            return anchor + self.block("#" * int(name[1]) + " " + compact(self.children(t)))
        if name == "a" and t.find(["h1", "h2", "h3", "h4", "h5", "h6", "p", "ul", "ol"]):
            content = self.children(t)
            heading = t.find(re.compile(r"^h[1-6]$"))
            label = "Explore " + (
                compact(heading.get_text(" ", strip=True)) if heading else "linked page"
            )
            return self.block(content) + self.block(self.link(escaped(label), t.get("href", "")))
        if name == "a":
            label = compact(self.children(t)) or escaped(
                t.get("aria-label") or t.get("title") or t.get("href", "Link")
            )
            return self.link(label, t.get("href", ""))
        if name in {"strong", "b", "em", "i"}:
            text = self.children(t).strip()
            if not text:
                return ""
            marker = "**" if name in {"strong", "b"} else "*"
            return marker + text + marker
        if name in {"ul", "ol"}:
            if any(
                item.find(re.compile(r"^h[1-6]$")) for item in t.find_all("li", recursive=False)
            ):
                return anchor + "".join(
                    self.render(item) for item in t.find_all("li", recursive=False)
                )
            lines = []
            number = int(t.get("start", "1")) if str(t.get("start", "1")).isdigit() else 1
            for item in t.find_all("li", recursive=False):
                rendered = clean(self.children(item))
                if not rendered:
                    continue
                prefix = f"{number}. " if name == "ol" else "- "
                rows = rendered.splitlines()
                lines.append(
                    prefix
                    + rows[0]
                    + "\n"
                    + "\n".join(" " * len(prefix) + r if r else "" for r in rows[1:])
                )
                number += 1
            preceding = t.find_previous_sibling()
            already = preceding and re.search(
                r"courses|sources", preceding.get_text(), re.IGNORECASE
            )
            label = "Sources (courses):\n\n" if "ability-card__source" in cs and not already else ""
            return anchor + self.block(label + "\n".join(lines).rstrip())
        if name == "dl":
            out = []
            for group in t.find_all(recursive=False):
                if group.name == "div":
                    terms, values = (
                        group.find_all("dt", recursive=False),
                        group.find_all("dd", recursive=False),
                    )
                    extra = [
                        x for x in group.find_all(recursive=False) if x.name not in {"dt", "dd"}
                    ]
                    term = "; ".join(compact(self.children(x)) for x in terms)
                    val = "\n\n".join(clean(self.children(x)) for x in values)
                    if terms:
                        out.append(self.block("**" + term + ":** " + val))
                        out.extend(self.render(x) for x in extra)
                    else:
                        out.append(self.children(group))
                elif group.name == "dt":
                    out.append(self.block("**" + compact(self.children(group)) + ":**"))
                else:
                    out.append(self.render(group))
            return anchor + "".join(out)
        if name == "table":
            rows = t.find_all("tr")
            headings = (
                [compact(self.children(x)) for x in rows[0].find_all("th", recursive=False)]
                if rows
                else []
            )
            parts = [self.children(t.caption)] if t.caption else []
            for row in rows:
                cells = row.find_all(["td", "th"], recursive=False)
                if headings and all(x.name == "th" for x in cells):
                    continue
                vals = [compact(self.children(c)) for c in cells]
                parts.append(
                    "- "
                    + "; ".join(
                        (headings[i] + ": " if i < len(headings) else "") + v
                        for i, v in enumerate(vals)
                    )
                )
            return anchor + self.block("\n".join(parts))
        if name == "blockquote":
            return anchor + self.block(
                "\n".join("> " + x for x in clean(self.children(t)).splitlines())
            )
        text = self.children(t)
        if "ability-card" in cs and t.get("data-domain"):
            domain = "Domain: " + escaped(t["data-domain"])
            text = re.sub(r"(### [^\n]+\n)", lambda m: m[1] + "\n" + domain + "\n", text, count=1)
        if name == "p" or name in BLOCK_TAGS:
            return anchor + self.block(text)
        return text


def convert(path, source, site, keep_anchors=False):
    raw = path.read_bytes()
    soup = BeautifulSoup(raw.decode("utf-8"), "html.parser")
    mains = soup.find_all("main")
    if len(mains) != 1:
        raise ValueError(f"expected one <main>, found {len(mains)}")
    rel = path.relative_to(source)
    stem = rel.with_suffix("").as_posix()
    route = "/" if stem == "index" else "/" + stem
    canonical = soup.find("link", rel="canonical")
    url = canonical.get("href", "") if canonical else ""
    if not url:
        url = site.rstrip("/") + route
    if urlsplit(url).scheme not in {"http", "https"} or not urlsplit(url).netloc:
        raise ValueError("canonical URL must be absolute HTTP(S)")

    def meta(key):
        t = soup.find("meta", attrs={"name": key})
        return t.get("content", "") if t else ""

    h1 = mains[0].find_all("h1")
    if len(h1) != 1:
        raise ValueError(f"expected one h1 in main, found {len(h1)}")
    r = Renderer(url, keep_anchors)
    body = clean(r.render(mains[0]))
    title = compact(h1[0].get_text(" ", strip=True))
    md_path = "/" + rel.with_suffix(".md").as_posix()
    origin = urlunsplit((*urlsplit(url)[:2], "", "", ""))
    data = {
        "title": title,
        "description": meta("description"),
        "url": url,
        "markdown_url": origin + md_path,
        "language": soup.html.get("lang", "en") if soup.html else "en",
        "source": "dev_html/" + rel.as_posix(),
        "source_sha256": hashlib.sha256(raw).hexdigest(),
    }
    modified = soup.find("meta", attrs={"property": "article:modified_time"}) or soup.find(
        "meta", attrs={"name": "dateModified"}
    )
    if modified and modified.get("content"):
        data["date_modified"] = modified["content"]
    head = "---\n" + "\n".join(k + ": " + quoted(v) for k, v in data.items()) + "\n---\n\n"
    if mains[0].select("[data-course]"):
        r.warn("Course names retained; grades injected by JavaScript are not inferred.")
    if mains[0].select("canvas, [data-context-explorer]"):
        r.warn(
            "Interactive graphics retained as surrounding static text/media only; no visual/JS inference."
        )
    entry = {
        **data,
        "output": rel.with_suffix(".md").as_posix(),
        "characters": len(body),
        "words": len(body.split()),
        "headings": [
            {
                "level": int(h.name[1]),
                "text": compact(h.get_text(" ", strip=True)),
                "id": h.get("id"),
            }
            for h in mains[0].find_all(re.compile(r"^h[1-6]$"))
        ],
        "sections": [
            {
                "id": s.get("id"),
                "label": s.get("aria-label") or s.get("data-nav"),
                "url": url + "#" + s["id"],
            }
            for s in mains[0].find_all("section", id=True)
        ],
        "media_counts": {k: r.media.count(k) for k in sorted(set(r.media))},
        "warnings": r.warnings,
    }
    return head + body + "\n", entry


def main(argv=None):
    p = argparse.ArgumentParser(
        description=__doc__, formatter_class=argparse.ArgumentDefaultsHelpFormatter
    )
    p.add_argument("--source", type=Path, default=ROOT / "dev_html", help="HTML source directory")
    p.add_argument(
        "--output",
        type=Path,
        default=ROOT / "build" / "markdown",
        help="Dedicated generated directory",
    )
    p.add_argument(
        "--site",
        default="https://georgedreemer.com",
        help="Fallback origin if canonical is missing",
    )
    p.add_argument(
        "--anchors",
        action="store_true",
        help="Also write raw <a id> anchors (not pure Markdown)",
    )
    p.add_argument(
        "--check",
        action="store_true",
        help="Fail if generated files are missing/stale; write nothing",
    )
    p.add_argument("--dry-run", action="store_true", help="Preview changes; write nothing")
    args = p.parse_args(argv)
    source, output = args.source.resolve(), args.output.resolve()
    if not source.is_dir():
        p.error(f"Source directory not found: {source}")
    if output == source or source in output.parents or output in source.parents:
        p.error("Source and output must be separate, non-overlapping directories")
    paths = sorted(
        x
        for x in source.rglob("*.html")
        if not any(
            part.lower() == "archive" or part.startswith(".")
            for part in x.relative_to(source).parts
        )
    )
    if not paths:
        p.error("No HTML pages found")
    expected, entries, errors = {}, [], []
    for path in paths:
        try:
            content, entry = convert(path, source, args.site, args.anchors)
            if any(e["url"] == entry["url"] for e in entries):
                raise ValueError("duplicate canonical URL: " + entry["url"])
            expected[entry["output"]] = content
            entries.append(entry)
        except (OSError, ValueError, UnicodeError) as e:
            errors.append(f"{path.relative_to(source)}: {e}")
    if errors:
        print("BUILD FAILED; no outputs changed", file=sys.stderr)
        for e in errors:
            print("  " + e, file=sys.stderr)
        return 2
    expected["manifest.json"] = (
        json.dumps(
            {"generator": "build-markdown", "version": VERSION, "pages": entries},
            ensure_ascii=False,
            indent=2,
        )
        + "\n"
    )
    stale, previous = [], output / "manifest.json"
    if previous.exists():
        try:
            old = json.loads(previous.read_text(encoding="utf-8"))
            if old.get("generator") == "build-markdown":
                stale = [e["output"] for e in old.get("pages", []) if e["output"] not in expected]
        except (ValueError, KeyError):
            print("Warning: old manifest unreadable; no stale files will be removed.")
    changes = 0
    for rel, text in expected.items():
        dest = output / rel
        old_text = dest.read_text(encoding="utf-8") if dest.exists() else None
        status = "NEW" if old_text is None else "SAME" if old_text == text else "UPDATE"
        print(f"{status:6} {rel}")
        if status != "SAME":
            changes += 1
            if not args.check and not args.dry_run:
                dest.parent.mkdir(parents=True, exist_ok=True)
                tmp = dest.with_suffix(dest.suffix + ".tmp")
                tmp.write_text(text, encoding="utf-8")
                tmp.replace(dest)
    for rel in stale:
        dest = (output / rel).resolve()
        if output not in dest.parents:
            print("Warning: ignoring unsafe old manifest path: " + rel)
            continue
        if dest.exists():
            changes += 1
            print("STALE  " + rel)
            if not args.check and not args.dry_run:
                dest.unlink()
    print(
        f"\n{len(entries)} page(s), {changes} changed file(s), {sum(len(e['warnings']) for e in entries)} informational warning(s)."
    )
    print("Warnings and source mapping are in manifest.json; HTML is never modified.")
    return 1 if args.check and changes else 0


if __name__ == "__main__":
    sys.exit(main())
