#!/bin/sh
set -e

cd /var/www/html

if [ ! -f .env ] && [ -f .env.example ]; then
  cp .env.example .env
fi

if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi

if ! grep -q "^APP_KEY=base64:" .env 2>/dev/null; then
  php artisan key:generate --force
fi

if [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
  if command -v timeout >/dev/null 2>&1; then
    if ! timeout 60 php artisan migrate --force --no-interaction; then
      echo "Migration step skipped after timeout/failure; container will continue startup."
    fi
  else
    if ! php artisan migrate --force --no-interaction; then
      echo "Migration step failed; container will continue startup."
    fi
  fi
fi

# Ensure frontend assets exist for Laravel @vite in containerized startup.
if [ ! -f public/build/manifest.json ]; then
  npm install
  npm run build
fi

if [ "$1" = "" ]; then
  exec php artisan serve --host=0.0.0.0 --port=8000
fi

exec "$@"
