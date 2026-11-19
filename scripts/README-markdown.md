# Website Markdown generator (v1.1.0)

Local exporter: `dev_html/**/*.html` -> `build/markdown/**/*.md` plus `manifest.json`.
HTML stays the only authored source. Nothing is deployed or edited.

## Install

Merge `scripts/` and `tests/` into the repository root (do not replace your existing scripts folder).
Add to `.gitignore`: `.venv-markdown/` and `__pycache__/`.
Merge the two rules in `.markdownlint.json` into your own markdownlint config (see below).

## Commands (repository root)

```bash
bash scripts/build-markdown.sh              # generate
bash scripts/build-markdown.sh --dry-run    # preview output changes
bash scripts/build-markdown.sh --check      # fail if output is stale
bash scripts/build-markdown.sh --anchors    # optional: add raw <a id> anchors
.venv-markdown/bin/python -m unittest discover -s tests -p 'test_markdown_generator.py' -v
```

## Boundaries

No JavaScript execution (grades injected by JS are not inferred), no PDF/video/OCR extraction,
no remote URL checks, no HTML edits, no deployment. Details are unchanged from v1.0.
