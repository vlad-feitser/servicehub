FROM php:8.4.25-fpm-bookworm

COPY --from=composer:2.10.3 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/backend