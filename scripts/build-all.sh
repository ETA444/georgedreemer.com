#!/usr/bin/env bash
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(cd "${SCRIPT_DIR}/.." && pwd)"
cd "$ROOT_DIR"

python3 scripts/schema.py
bash scripts/build-markdown.sh
python3 scripts/build-agent-files.py
python3 scripts/build-llms.py
