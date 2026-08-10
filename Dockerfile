FROM php:8.5-cli

WORKDIR /var/www

# Dependencias del sistema + extensiones PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    curl \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    zip \
    bcmath \
    gd \
    && rm -rf /var/lib/apt/lists/*

# Node.js (para compilar Vite)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copiamos todo el proyecto
COPY . .

# Dependencias PHP
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Dependencias Node + build de assets
RUN npm install && npm run build

# Permisos para storage y cache
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Script de arranque (genera .env, APP_KEY, cachea, migra y levanta el server en el puerto de Render)
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 10000

ENTRYPOINT ["docker-entrypoint.sh"]