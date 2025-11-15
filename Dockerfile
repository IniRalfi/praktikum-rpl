FROM php:8.3-fpm

# Install extensions
RUN apt-get update && apt-get install -y \
    unzip git curl libxml2-dev libpng-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql xml dom gd zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
