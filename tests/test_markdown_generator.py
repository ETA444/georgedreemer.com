import importlib.util
import json
import subprocess
import sys
import tempfile
import unittest
from pathlib import Path

SCRIPT = Path(__file__).resolve().parents[1] / "scripts" / "build-markdown.py"
spec = importlib.util.spec_from_file_location("exporter", SCRIPT)
mod = importlib.util.module_from_spec(spec)
spec.loader.exec_module(mod)


class RendererTests(unittest.TestCase):
    def render(self, html):
        r = mod.Renderer("https://example.com/work/project")
        return mod.clean(r.render(mod.BeautifulSoup(html, "html.parser"))), r

    def test_heading(self):
        s, _ = self.render('<h1 class="screenreader-only">Title</h1><h2>Details</h2>')
        self.assertIn("# Title", s)
        self.assertIn("## Details", s)

    def test_decorative(self):
        s, _ = self.render(
            '<span aria-hidden="true">Tw</span><span>Twitter</span><svg>junk</svg>'
        )
        self.assertEqual(s, "Twitter")

    def test_caveat(self):
        s, _ = self.render(
            '<dl><div><dt>Estimated GPA</dt><dd>3.81<div class="info-tip__panel">Not official</div></dd></div></dl>'
        )
        self.assertIn("**Estimated GPA:** 3.81", s)
        self.assertIn("Not official", s)

    def test_links(self):
        s, _ = self.render('<a href="../downloads/report.pdf">Report</a>')
        self.assertIn("https://example.com/downloads/report.pdf", s)

    def test_card_link(self):
        s, _ = self.render('<a href="/work/x"><h3>X</h3><p>Story</p></a>')
        self.assertIn("### X\n", s)
        self.assertIn("Story", s)
        self.assertIn("[Explore X]", s)

    def test_bad_scheme(self):
        s, r = self.render('<a href="javascript:alert(1)">Click</a>')
        self.assertEqual(s, "Click")
        self.assertTrue(r.warnings)

    def test_code(self):
        s, _ = self.render(
            '<pre><code class="language-python">x = "```"\n  print(x)\n</code></pre>'
        )
        self.assertIn("````python", s)
        self.assertIn("  print(x)", s)

    def test_inline_code(self):
        s, _ = self.render("<p>Run <code>a_b()</code>.</p>")
        self.assertEqual(s, "Run `a_b()`.")

    def test_sources(self):
        s, _ = self.render(
            '<ul class="ability-card__source"><li>Data Engineering</li></ul>'
        )
        self.assertIn("Sources (courses):", s)
        self.assertIn("- Data Engineering", s)

    def test_card_lists(self):
        s, _ = self.render(
            '<ul><li class="ability-card" data-domain="data"><h3>Analysis</h3><p>Did research</p><ul><li>SQL</li></ul></li></ul>'
        )
        self.assertIn("### Analysis\n", s)
        self.assertNotIn("- ###", s)
        self.assertIn("Domain: data", s)
        self.assertIn("- SQL", s)

    def test_list(self):
        s, _ = self.render(
            '<ol start="3"><li>First<ul><li>Nested</li></ul></li><li>Second</li></ol>'
        )
        self.assertIn("3. First", s)
        self.assertIn("   - Nested", s)
        self.assertIn("4. Second", s)

    def test_hidden_story(self):
        s, _ = self.render(
            '<div class="story-accordion__body" aria-hidden="true"><p>Useful evidence</p></div>'
        )
        self.assertIn("Useful evidence", s)

    def test_media(self):
        s, r = self.render(
            '<iframe title="Interview" src="https://www.youtube.com/embed/abc?autoplay=1"></iframe>'
        )
        self.assertIn("[Interview](<https://www.youtube.com/watch?v=abc>)", s)
        self.assertEqual(r.media, ["iframe"])

    def test_instagram(self):
        s, _ = self.render(
            '<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/abc/"><p>View post on Instagram junk</p></blockquote>'
        )
        self.assertIn("[Instagram post]", s)
        self.assertNotIn("junk", s)

    def test_buttons(self):
        s, _ = self.render(
            '<button>Next slide</button><button><span class="story-accordion__trigger-label">My story</span></button>'
        )
        self.assertNotIn("Next slide", s)
        self.assertIn("#### My story", s)

    def test_table(self):
        s, _ = self.render(
            "<table><tr><th>Tool</th><th>Use</th></tr><tr><td>SQL</td><td>Extraction</td></tr></table>"
        )
        self.assertIn("- Tool: SQL; Use: Extraction", s)

    def test_opt_out(self):
        s, _ = self.render('<div data-md="exclude">Noise</div><p>Evidence</p>')
        self.assertEqual(s, "Evidence")


class BuildTests(unittest.TestCase):
    def setUp(self):
        self.tmp = tempfile.TemporaryDirectory()
        self.addCleanup(self.tmp.cleanup)
        self.root = Path(self.tmp.name)
        self.src = self.root / "dev_html"
        self.src.mkdir()
        self.out = self.root / "generated"
        self.html = '<html lang="en"><head><link rel="canonical" href="https://example.com/"><meta name="description" content="A &amp; B"></head><body><main><h1>Test</h1><p>Body</p></main></body></html>'
        (self.src / "index.html").write_text(self.html)

    def run_build(self, *args):
        return subprocess.run(
            [
                sys.executable,
                str(SCRIPT),
                "--source",
                str(self.src),
                "--output",
                str(self.out),
                *args,
            ],
            capture_output=True,
            text=True,
        )

    def test_reproducible(self):
        self.assertEqual(self.run_build().returncode, 0)
        first = (self.out / "index.md").read_bytes()
        stat = (self.out / "index.md").stat().st_mtime_ns
        self.assertEqual(self.run_build().returncode, 0)
        self.assertEqual(first, (self.out / "index.md").read_bytes())
        self.assertEqual(stat, (self.out / "index.md").stat().st_mtime_ns)
        self.assertEqual(self.run_build("--check").returncode, 0)

    def test_dry_run(self):
        self.assertEqual(self.run_build("--dry-run").returncode, 0)
        self.assertFalse(self.out.exists())

    def test_stale_check(self):
        self.assertEqual(self.run_build("--check").returncode, 1)
        self.assertFalse(self.out.exists())

    def test_abort(self):
        (self.src / "broken.html").write_text("<main>Missing heading</main>")
        self.assertEqual(self.run_build().returncode, 2)
        self.assertFalse(self.out.exists())

    def test_archive(self):
        (self.src / "archive").mkdir()
        (self.src / "archive" / "bad.html").write_text("Ignore me")
        self.assertEqual(self.run_build().returncode, 0)
        manifest = json.loads((self.out / "manifest.json").read_text())
        self.assertEqual(len(manifest["pages"]), 1)

    def test_delete_only_owned(self):
        extra = self.src / "extra.html"
        extra.write_text(
            self.html.replace("https://example.com/", "https://example.com/extra")
        )
        self.assertEqual(self.run_build().returncode, 0)
        (self.out / "manual.md").write_text("Keep")
        extra.unlink()
        self.assertEqual(self.run_build().returncode, 0)
        self.assertFalse((self.out / "extra.md").exists())
        self.assertTrue((self.out / "manual.md").exists())

    def test_overlap(self):
        result = subprocess.run(
            [
                sys.executable,
                str(SCRIPT),
                "--source",
                str(self.src),
                "--output",
                str(self.src / "build"),
            ],
            capture_output=True,
        )
        self.assertEqual(result.returncode, 2)


if __name__ == "__main__":
    unittest.main()
