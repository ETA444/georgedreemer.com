#!/usr/bin/env bash
set -euo pipefail
ROOT="$(cd -- "$(dirname -- "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$ROOT"

echo "1/5 schema";       python3 scripts/schema.py
echo "2/5 markdown";     bash scripts/build-markdown.sh
echo "3/5 llms";         python3 scripts/build-llms.py
echo "4/5 agent files";  python3 scripts/build-agent-files.py
echo "5/5 tests"

if [[ -x .venv-markdown/bin/python && -d tests ]]; then
  .venv-markdown/bin/python -m unittest discover -s tests
fi
