#!/usr/bin/env python3
"""schema.py - validate, repair and publish the JSON-LD in seo/schema/.

seo/schema/<page>_schema.json is the source of truth (page = file name in dev_html/,
e.g. work/datasafari.html <-> seo/schema/datasafari_schema.json). dev_html/ is only
read for the page list, <h1>, canonical, meta description and element ids, and is
written ONLY by --embed (only the JSON-LD <script> block is replaced).

  python3 scripts/schema.py                       check everything (exit 1 on ERROR)
  python3 scripts/schema.py --fix                 preview automatic repairs of the JSON files
  python3 scripts/schema.py --fix --write         apply them to seo/schema/*.json
  python3 scripts/schema.py --embed               preview copying the JSON into dev_html/*.html
  python3 scripts/schema.py --embed --write       apply it

Standard library only.
"""

import argparse
import copy
import html as htmllib
import json
import re
import sys
from pathlib import Path
from urllib.parse import unquote, urlsplit

ROOT = Path(__file__).resolve().parent.parent
SCHEMA_DIR, SRC, PUBLIC = (
    ROOT / "seo" / "schema",
    ROOT / "dev_html",
    ROOT / "public_html",
)
ORIGIN = "https://georgedreemer.com"
PERSON, SITE = ORIGIN + "/#person", ORIGIN + "/#website"
HUBS = {
    "work": ("Work", "/#work"),
    "education": ("Education", "/#education"),
}  # /work and /education redirect to /
FOUNDER_TO_ORG = {  # Person.founder is invalid; ventures declare founder -> Person on their own pages
    "DREEMCORP": ORIGIN + "/work/dreemcorp#organization",
    "CryptoPandemic": ORIGIN + "/work/cryptopandemic#organization",
}
FILE = re.compile(r"\.[A-Za-z0-9]{2,5}$")
WEBPAGE = ("WebPage", "ProfilePage", "CollectionPage")
LD = re.compile(
    r"(?P<open><script\b[^>]*type=[\"']application/ld\+json[\"'][^>]*>)(?P<body>.*?)(?P<close></script>)",
    re.DOTALL | re.IGNORECASE,
)


# ---------- helpers ----------
def dump(doc):
    return json.dumps(doc, indent=2, ensure_ascii=False) + "\n"


def attrs(tag):
    return {
        k.lower(): htmllib.unescape(v)
        for k, v in re.findall(r"([\w:-]+)\s*=\s*\"([^\"]*)\"", tag)
    }


def plain(text):
    text = re.sub(r"<[^>]+>", "", text)
    return re.sub(r"\s+", " ", htmllib.unescape(text)).strip()


def add(items, message):
    if message not in items:
        items.append(message)


def html_info(text):
    h1 = re.search(r"<h1\b[^>]*>(.*?)</h1>", text, re.DOTALL | re.IGNORECASE)
    canonical = description = None
    for t in re.findall(r"<link\b[^>]*>", text, re.IGNORECASE):
        if attrs(t).get("rel") == "canonical":
            canonical = attrs(t).get("href")
    for t in re.findall(r"<meta\b[^>]*>", text, re.IGNORECASE):
        if attrs(t).get("name") == "description":
            description = attrs(t).get("content")
    lang = re.search(r"<html\b[^>]*\blang=\"([^\"]+)\"", text, re.IGNORECASE)
    return {
        "h1": plain(h1.group(1)) if h1 else "",
        "canonical": canonical,
        "description": description,
        "lang": lang.group(1) if lang else "en",
        "ids": set(re.findall(r"\bid=\"([^\"]+)\"", text)),
    }


def nodes(doc):
    g = doc.get("@graph")
    return g if isinstance(g, list) else [doc]


def walk(o):
    if isinstance(o, dict):
        yield o
        for v in o.values():
            yield from walk(v)
    elif isinstance(o, list):
        for v in o:
            yield from walk(v)


def types(n):
    t = n.get("@type", [])
    return [t] if isinstance(t, str) else list(t)


def is_def(node):
    return "@id" in node and "@type" in node


def is_ref(node):
    return "@id" in node and "@type" not in node


def discover():
    pages = {}
    for f in sorted(SRC.rglob("*.html")):
        rel = f.relative_to(SRC)
        if any(x.lower() == "archive" or x.startswith(".") for x in rel.parts):
            continue
        stem = rel.with_suffix("").as_posix()
        route = "/" if stem == "index" else "/" + stem
        text = f.read_text(encoding="utf-8")
        pages[route] = {
            "route": route,
            "html": f,
            "text": text,
            "info": html_info(text),
            "doc": None,
            "error": None,
            "file": SCHEMA_DIR / f"{rel.stem}_schema.json",
        }
    for p in pages.values():
        if not p["file"].exists():
            p["error"] = f"missing {p['file'].relative_to(ROOT)}"
            continue
        try:
            p["doc"] = json.loads(p["file"].read_text(encoding="utf-8"))
        except ValueError as e:
            p["error"] = f"{p['file'].relative_to(ROOT)} is not valid JSON: {e}"
    return pages


# ---------- repairs (operate on the JSON documents) ----------
def build_breadcrumb(p):
    parts = p["route"].strip("/").split("/")
    hub = HUBS.get(parts[0])
    name = re.split(r"\s+[—–-]\s+", p["info"]["h1"] or parts[-1])[0]
    url = p["info"]["canonical"] or ORIGIN + p["route"]
    items = (
        [("George Dreemer", ORIGIN)]
        + ([(hub[0], ORIGIN + hub[1])] if hub else [])
        + [(name, url)]
    )
    return {
        "@type": "BreadcrumbList",
        "@id": url + "#breadcrumb",
        "itemListElement": [
            {"@type": "ListItem", "position": i, "name": n, "item": u}
            for i, (n, u) in enumerate(items, 1)
        ],
    }


def fix(p, routes):
    doc, notes = copy.deepcopy(p["doc"]), []
    for d in walk(
        doc
    ):  # links to non-existent routes (e.g. /skipschoolmakemoney -> /work/skipschoolmakemoney)
        for key in ("@id", "url"):
            v = d.get(key)
            if isinstance(v, str) and v.startswith(ORIGIN):
                path = urlsplit(v).path or "/"
                if path not in routes and not FILE.search(path):
                    for pre in ("/work", "/education"):
                        if pre + path in routes:
                            d[key] = (
                                ORIGIN
                                + pre
                                + path
                                + (
                                    "#" + urlsplit(v).fragment
                                    if urlsplit(v).fragment
                                    else ""
                                )
                            )
                            notes.append(f"{key} path repaired: {v} -> {d[key]}")
    g = nodes(doc)
    for n in list(g):
        if any(t in WEBPAGE for t in types(n)):
            if n.get("isPartOf") != {"@id": SITE}:
                n["isPartOf"] = {"@id": SITE}
                notes.append("isPartOf -> {'@id': '/#website'}")
            if not n.get("inLanguage"):
                n["inLanguage"] = p["info"]["lang"]
                notes.append("added inLanguage")
            if p["info"]["h1"] and n.get("name") != p["info"]["h1"]:
                n["name"] = p["info"]["h1"]
                notes.append(f"WebPage.name -> <h1> ({p['info']['h1']})")
            if p["route"] != "/":
                bc = build_breadcrumb(p)
                if [x for x in g if "BreadcrumbList" in types(x)] != [bc]:
                    g[:] = [x for x in g if "BreadcrumbList" not in types(x)]
                    g.insert(g.index(n) + 1, bc)
                    notes.append("BreadcrumbList rebuilt (Home > hub > page)")
                if n.get("breadcrumb") != {"@id": bc["@id"]}:
                    n["breadcrumb"] = {"@id": bc["@id"]}
                    notes.append("WebPage.breadcrumb reference set")
        if "Person" in types(n) and "founder" in n:
            raw = n.pop("founder")
            ventures, moved, left = [], [], []
            for f in raw if isinstance(raw, list) else [raw]:
                target = (
                    next(
                        (x for x in g if "@type" in x and x.get("@id") == f.get("@id")),
                        None,
                    )
                    if "@type" not in f and "@id" in f
                    else None
                )
                org_id = FOUNDER_TO_ORG.get(f.get("name", ""))
                if target is not None:
                    target.setdefault("founder", {"@id": PERSON})
                    moved.append(target.get("name", target["@id"]))
                elif org_id:
                    ventures.append(
                        {
                            k: v
                            for k, v in {
                                "@type": "Organization",
                                "@id": org_id,
                                "name": f["name"],
                                "url": f.get("url"),
                                "description": f.get("description"),
                            }.items()
                            if v
                        }
                    )
                else:
                    left.append(f.get("name") or f.get("@id"))
            if ventures:
                have = n.setdefault("worksFor", [])
                have.extend(
                    v for v in ventures if v["@id"] not in [h.get("@id") for h in have]
                )
            msg = "Person.founder removed (valid only on Organization)"
            msg += (
                f"; founder -> Person set on: {', '.join(map(str, moved))}"
                if moved
                else ""
            )
            msg += (
                f"; worksFor added: {', '.join(v['name'] for v in ventures)}"
                if ventures
                else ""
            )
            msg += (
                f"; left to their own pages: {', '.join(map(str, left))}"
                if left
                else ""
            )
            notes.append(msg)
    return doc, list(dict.fromkeys(notes))


# ---------- checks ----------
def check(p, routes, pages, defs):
    errs, warns = [], []
    doc, info, g = p["doc"], p["info"], nodes(p["doc"])

    if doc.get("@context") not in (
        "https://schema.org",
        "https://schema.org/",
        "http://schema.org",
    ):
        add(errs, "@context must be https://schema.org")
    local = {d["@id"] for d in walk(doc) if is_def(d)}
    top = [n.get("@id") for n in g if "@type" in n]
    for i in sorted({x for x in top if x and top.count(x) > 1}):
        add(errs, f"duplicate top-level @id: {i}")
    for n in g:
        if "@type" in n and not n.get("@id"):
            add(errs, f"top-level {types(n)} has no @id")
    for d in walk(doc):
        for key in ("@id", "url"):
            v = d.get(key)
            if isinstance(v, str) and v.startswith(ORIGIN):
                path = urlsplit(v).path or "/"
                if FILE.search(path):
                    if (
                        PUBLIC.is_dir()
                        and not (PUBLIC / unquote(path).lstrip("/")).is_file()
                    ):
                        add(
                            warns,
                            f"linked file not found in public_html/ (sync first?): {path}",
                        )
                elif path not in routes:
                    add(errs, f"{key} points at a page that does not exist: {v}")
        v = d.get("@id")
        if (
            is_ref(d)
            and isinstance(v, str)
            and v.startswith(ORIGIN)
            and v not in local
            and v not in defs
        ):
            add(errs, f"reference does not resolve anywhere on the site: {v}")
    wp = [n for n in g if any(t in WEBPAGE for t in types(n))]
    if len(wp) != 1:
        add(errs, f"expected 1 WebPage node, found {len(wp)}")
    else:
        w, can = wp[0], info["canonical"]
        if not can:
            add(errs, "HTML page has no canonical link")
        elif w.get("url") != can:
            add(errs, f"WebPage.url {w.get('url')} != canonical {can}")
        if (w.get("isPartOf") or {}).get("@id") != SITE:
            add(errs, f"isPartOf must reference {SITE} (got {w.get('isPartOf')})")
        me = (w.get("mainEntity") or {}).get("@id")
        if not me:
            add(errs, "WebPage has no mainEntity")
        elif me not in local and me not in defs:
            add(errs, f"mainEntity does not resolve: {me}")
        if not w.get("inLanguage"):
            add(warns, "WebPage has no inLanguage (--fix adds it)")
        if info["h1"] and w.get("name") != info["h1"]:
            add(
                warns,
                f"WebPage.name differs from <h1> (--fix aligns it): '{w.get('name')}' vs '{info['h1']}'",
            )
        if (
            info["description"]
            and w.get("description")
            and w["description"].strip() != info["description"].strip()
        ):
            add(warns, "WebPage.description differs from the HTML meta description")
        if p["route"] != "/":
            bc = [n for n in g if "BreadcrumbList" in types(n)]
            if len(bc) != 1:
                add(errs, "missing BreadcrumbList (--fix adds it)")
            else:
                if (w.get("breadcrumb") or {}).get("@id") != bc[0].get("@id"):
                    add(
                        errs, "WebPage.breadcrumb does not reference the BreadcrumbList"
                    )
                items = bc[0].get("itemListElement", [])
                if len(items) < 2 or [i.get("position") for i in items] != list(
                    range(1, len(items) + 1)
                ):
                    add(errs, "breadcrumb needs >= 2 items with positions 1..n")
                for it in items:
                    u = urlsplit(it.get("item", ""))
                    path = u.path or "/"
                    if path not in routes:
                        add(
                            errs,
                            f"breadcrumb item is not a real page (redirect or typo): {it.get('item')}",
                        )
                    elif u.fragment and u.fragment not in pages[path]["info"]["ids"]:
                        add(
                            errs, f"breadcrumb anchor #{u.fragment} not found on {path}"
                        )
                if items and items[-1].get("item") != can:
                    add(errs, "last breadcrumb item must be the page itself")
    for n in g:
        if "Person" in types(n):
            if n.get("@id") != PERSON:
                add(errs, f"Person @id must be {PERSON}")
            if "founder" in n:
                add(
                    errs,
                    "Person.founder is not valid (use Organization.founder; --fix converts it)",
                )
            if p["route"] == "/":
                same = " ".join(n.get("sameAs", []))
                for need in (
                    "github.com/ETA444",
                    "linkedin.com/in/georgedreemer",
                    "x.com/444eta",
                ):
                    if need not in same:
                        add(warns, f"Person.sameAs lacks {need}")
                im = n.get("image")
                if isinstance(im, dict) and (im.get("width"), im.get("height")) == (
                    1200,
                    630,
                ):
                    add(
                        warns,
                        "Person.image is a 1200x630 social card, not a portrait (fine if you have none)",
                    )
        if (
            p["route"].startswith("/work/")
            and any(
                t in ("Organization", "CreativeWork", "SoftwareSourceCode")
                for t in types(n)
            )
            and str(n.get("@id", "")).startswith(info["canonical"] or "~")
            and PERSON
            not in json.dumps([n.get("founder"), n.get("creator"), n.get("author")])
        ):
            add(
                warns,
                f"{n.get('@id')} does not link back to {PERSON} (founder/creator/author)",
            )
    return errs, warns


# ---------- HTML embedding ----------
def embedded(p):
    return list(LD.finditer(p["text"]))


def embed_text(p):
    new = dump(p["doc"]).rstrip("\n")
    blocks = embedded(p)
    if not blocks:
        i = p["text"].lower().rfind("</head>")
        if i < 0:
            return None
        return (
            p["text"][:i]
            + '  <script type="application/ld+json">\n'
            + "\n".join("    " + l for l in new.splitlines())
            + "\n  </script>\n"
            + p["text"][i:]
        )
    m = blocks[0]
    start = p["text"].rfind("\n", 0, m.start()) + 1
    indent = re.match(r"\s*", p["text"][start : m.start()]).group(0)
    body = (
        "\n"
        + "\n".join((indent + "  " + l) if l else l for l in new.splitlines())
        + "\n"
        + indent
    )
    return p["text"][: m.start("body")] + body + p["text"][m.end("body") :]


def html_in_sync(p):
    blocks = embedded(p)
    if len(blocks) != 1:
        return False
    try:
        return json.loads(blocks[0].group("body")) == p["doc"]
    except ValueError:
        return False


def main():
    ap = argparse.ArgumentParser(
        description=__doc__, formatter_class=argparse.RawDescriptionHelpFormatter
    )
    ap.add_argument(
        "--fix", action="store_true", help="repair seo/schema/*.json automatically"
    )
    ap.add_argument(
        "--embed",
        action="store_true",
        help="copy seo/schema/*.json into the HTML <script> blocks",
    )
    ap.add_argument(
        "--write",
        action="store_true",
        help="with --fix/--embed: write to disk (default is preview)",
    )
    a = ap.parse_args()
    if a.write and not (a.fix or a.embed):
        ap.error("--write needs --fix and/or --embed")
    pages = discover()
    if not pages:
        print("No pages in dev_html/", file=sys.stderr)
        return 2
    routes = set(pages)
    bad = [p for p in pages.values() if p["error"]]
    for p in bad:
        print(f"FAIL  {p['route']}\n   ERROR {p['error']}")
    if bad:
        return 2
    known = {p["file"].name for p in pages.values()}
    for f in sorted(SCHEMA_DIR.glob("*_schema.json")):
        if f.name not in known:
            print(
                f"WARN  {f.relative_to(ROOT)} has no matching page in dev_html/ (ignored)"
            )
    if a.fix:
        for p in pages.values():
            new, notes = fix(p, routes)
            if new == p["doc"] and dump(new) == p["file"].read_text(encoding="utf-8"):
                print(f"OK    {p['file'].relative_to(ROOT)} (nothing to fix)")
                continue
            print(f"FIX   {p['file'].relative_to(ROOT)}")
            for n in notes or ["reformatted JSON (2-space indent)"]:
                print("   - " + n)
            if a.write:
                p["file"].write_text(dump(new), encoding="utf-8")
            p["doc"] = new
    if a.embed:
        for p in pages.values():
            out = embed_text(p)
            if out is None:
                print(f"FAIL  {p['html'].relative_to(ROOT)}: no </head> to insert into")
                return 2
            if out == p["text"]:
                print(f"OK    {p['html'].relative_to(ROOT)} (already in sync)")
                continue
            print(f"EMBED {p['html'].relative_to(ROOT)}")
            if a.write:
                p["html"].write_text(out, encoding="utf-8")
                p["text"] = out
    if a.fix or a.embed:
        print("" if a.write else "\nPreview only. Add --write to apply.")
        if not a.write:
            return 0
        for p in pages.values():
            p["text"] = p["html"].read_text(encoding="utf-8")
    defs = {}
    for p in pages.values():
        for d in walk(p["doc"]):
            if is_def(d):
                defs.setdefault(d["@id"], set()).add(tuple(sorted(types(d))))
    status = 0
    for p in pages.values():
        errs, warns = check(p, routes, pages, set(defs))
        own = {d["@id"] for d in walk(p["doc"]) if is_def(d)}
        for i, t in defs.items():
            if len(t) > 1 and i.startswith(ORIGIN) and i in own:
                errs.append(
                    f"@id {i} is typed differently across pages: {sorted(map(list, t))}"
                )
        if not html_in_sync(p):
            errs.append(
                f"{p['html'].relative_to(ROOT)} has different JSON-LD (run --embed --write)"
            )
        print(("FAIL  " if errs else "OK    ") + str(p["file"].relative_to(ROOT)))
        for e in errs:
            print("   ERROR " + e)
        for w in warns:
            print("   WARN  " + w)
        status |= bool(errs)
    return 1 if status else 0


if __name__ == "__main__":
    sys.exit(main())
