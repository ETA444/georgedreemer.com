#!/usr/bin/env zsh

# ─ GEORGEDREEMER.COM – cPanel → Local Sync ───────────────────────────
# Usage: ./scripts/cpanel-sync.sh

CPANEL_USER="georznmu"
CPANEL_HOST="premium85.web-hosting.com"
REMOTE_PATH="/home/$CPANEL_USER/public_html"
LOCAL_PATH="$(dirname "$0")/../public_html"

echo "🔄 Syncing from $CPANEL_HOST..."

rsync -avz --delete -e "ssh -p 21098" \
  --exclude='.git/' \
  --exclude='*.log' \
  --exclude='*.bak' \
  --exclude='error_log' \
  --exclude='cache/' \
  --exclude='tmp/' \
  "$CPANEL_USER@$CPANEL_HOST:$REMOTE_PATH/" "$LOCAL_PATH/"

echo ""
echo "✅ Sync complete. Review changes:"
echo ""
cd "$(dirname "$0")/.." && git status

