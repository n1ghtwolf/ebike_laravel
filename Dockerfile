# Production Dockerfile for Laravel 12
FROM php:8.3-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \ 
        bash git curl libpng-dev libonig-dev libxml2-dev zip unzip sqlite-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy application
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction \
    && npm install --silent \
    && npm run build --silent

RUN php artisan optimize

# Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

USER www-data

CMD ["php-fpm"]