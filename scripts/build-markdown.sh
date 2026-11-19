#!/usr/bin/env bash
set -euo pipefail
ROOT="$(cd -- "$(dirname -- "${BASH_SOURCE[0]}")/.." && pwd)"
PYTHON="$ROOT/.venv-markdown/bin/python"
if ! command -v python3 >/dev/null 2>&1; then
  echo "Python 3 is required. On your Mac: brew install python" >&2
  exit 2
fi
if [[ ! -x "$PYTHON" ]]; then
  echo "Creating an isolated Python environment (first run only)..."
  python3 -m venv "$ROOT/.venv-markdown"
fi
if ! "$PYTHON" -c 'import bs4; assert bs4.__version__ == "4.13.4"' >/dev/null 2>&1; then
  echo "Installing the tested HTML parser (internet required for setup only)..."
  "$PYTHON" -m pip install -r "$ROOT/scripts/requirements-markdown.txt"
fi
exec "$PYTHON" "$ROOT/scripts/build-markdown.py" "$@"
