#!/bin/bash
set -e

# Render inyecta PORT en tiempo de ejecución (usamos 10000 como fallback)
PORT="${PORT:-10000}"

cd /var/www

# Generar .env si no existe
if [ ! -f .env ]; then
    if [ -f .env.example ]; then
        cp .env.example .env
    else
        # No hay .env.example: creamos uno mínimo.
        # Las variables reales (DB_*, APP_KEY, etc.) deben venir configuradas
        # en el panel de Render como Environment Variables.
        touch .env
    fi
fi

# Generar APP_KEY si no está seteada (y si no viene ya como variable de entorno de Render)
if [ -z "${APP_KEY}" ] && ! grep -q "^APP_KEY=base64" .env; then
    php artisan key:generate --force
fi

# Cachear config/rutas/vistas (ignora errores en el primer deploy si algo aún no está listo)
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Migrar la base de datos (quita esta línea si prefieres migrar manualmente)
php artisan migrate --force || true

exec php artisan serve --host=0.0.0.0 --port="${PORT}"