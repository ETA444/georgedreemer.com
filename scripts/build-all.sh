#!/usr/bin/env bash
set -euo pipefail
cd "$(dirname "${BASH_SOURCE}")/.."[0]
python3 scripts/schema.py
bash scripts/build-markdown.sh
python3 scripts/build-agent-files.py
python3 scripts/build-llms.py
