FROM php:8.3-fpm

# System paketlar
RUN apt-get update && apt-get install -y \
    apt-utils \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libzip-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip unzip curl git \
    jpegoptim optipng pngquant gifsicle \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql pdo_pgsql bcmath zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# PHP config
COPY ./_docker/php/conf.d/php.ini /usr/local/etc/php/conf.d/php.ini

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/php

EXPOSE 9000

CMD ["php-fpm"]
