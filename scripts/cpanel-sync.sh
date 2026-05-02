#!/usr/bin/env zsh

# ── CryptoPandemic – cPanel → Local Sync ──────────────────────────
# Usage: ./scripts/cpanel-sync.sh
# Pulls latest files from cPanel server into ./public_html/
# then commit manually after reviewing the diff.

CPANEL_USER="georznmu"
CPANEL_HOST="premium85.web-hosting.com"# e.g. server123.namecheap.com
REMOTE_PATH="/home/$CPANEL_USER/cryptopandemic.com"
LOCAL_PATH="$(dirname "$0")/../public_html"

echo "🔄 Syncing from $CPANEL_HOST..."

rsync -avz --delete \
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
