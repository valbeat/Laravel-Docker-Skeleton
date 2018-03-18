FROM php:7.2-fpm-alpine

RUN apk update \
 && apk add --no-cache \
    zip \
    libpng \
    libpng-dev \
    libjpeg \
    icu \
    icu-dev \
    libxml2 \
    libxml2-dev \
    openssl \
    openssl-dev 

RUN docker-php-ext-install \
    pdo_mysql \
    mysqli \
    mbstring