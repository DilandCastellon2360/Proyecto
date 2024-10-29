FROM php:8.0-fpm

RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install gd mysqli pdo_mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY ./proyecto /var/www/html/
