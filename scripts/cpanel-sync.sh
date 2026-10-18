#!/usr/bin/env zsh
set -euo pipefail

# ─ GEORGEDREEMER.COM – cPanel → Local Sync ───────────────────────────
# Usage:  ./scripts/cpanel-sync.sh            # sync
#         ./scripts/cpanel-sync.sh --dry-run  # preview only, changes nothing

CPANEL_USER="georznmu"
CPANEL_HOST="premium85.web-hosting.com"
CPANEL_PORT="21098"
REMOTE_PATH="/home/$CPANEL_USER/public_html"

SCRIPT_DIR="${0:A:h}"
REPO_DIR="${SCRIPT_DIR:h}"
LOCAL_PATH="$REPO_DIR/public_html"

REMOTE="$CPANEL_USER@$CPANEL_HOST"

# One SSH connection shared by the preflight check and rsync (one passphrase prompt)
SSH_OPTS=(-p "$CPANEL_PORT" -o ConnectTimeout=10
          -o ControlMaster=auto -o ControlPersist=60
          -o ControlPath="$HOME/.ssh/cm-%C")

RSYNC_FLAGS=(-avz --delete)
if [[ "${1:-}" == "-n" || "${1:-}" == "--dry-run" ]]; then
  RSYNC_FLAGS+=(--dry-run)
  echo "🧪 Dry run: no files will be changed."
fi

EXCLUDES=(
  --exclude='.git/'
  --exclude='*.log'
  --exclude='*.bak'
  --exclude='error_log'
  --exclude='cache/'
  --exclude='tmp/'
)

cleanup() { ssh "${SSH_OPTS[@]}" -O exit "$REMOTE" 2>/dev/null || true; }
trap cleanup EXIT

mkdir -p "$LOCAL_PATH"

echo "🔐 Checking SSH shell access on $CPANEL_HOST..."
if ! ssh "${SSH_OPTS[@]}" "$REMOTE" true; then
  echo ""
  echo "❌ SSH check failed. If you saw 'Shell access is not enabled':"
  echo "   cPanel → Exclusive for Namecheap Customers → Manage Shell → enable SSH."
  exit 1
fi

echo "🔄 Syncing from $CPANEL_HOST..."
rsync "${RSYNC_FLAGS[@]}" -e "ssh ${SSH_OPTS[*]}" \
  "${EXCLUDES[@]}" \
  "$REMOTE:$REMOTE_PATH/" "$LOCAL_PATH/"

echo ""
echo "✅ Sync complete. Review changes:"
echo ""
git -C "$REPO_DIR" status
