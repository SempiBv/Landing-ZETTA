#!/bin/bash
set -e

# Render inyecta PORT en tiempo de ejecución (usamos 10000 como fallback)
PORT="${PORT:-10000}"

cd /var/www

# Generar .env a partir de .env.example si no existe
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Generar APP_KEY si no está seteada
if ! grep -q "^APP_KEY=base64" .env; then
    php artisan key:generate --force
fi

# Cachear config/rutas/vistas (ignora errores en el primer deploy si algo aún no está listo)
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Migrar la base de datos (quita esta línea si prefieres migrar manualmente)
php artisan migrate --force || true

exec php artisan serve --host=0.0.0.0 --port="${PORT}"