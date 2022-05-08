FROM php:7.4-fpm

WORKDIR /var/www/service_2

RUN rm /etc/apt/preferences.d/no-debian-php

RUN apt-get update \
    && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        libxml2-dev \
        zip \
        php-soap \
        php-gd \
        curl \
    && docker-php-ext-configure zip \
    && docker-php-ext-install \
        zip \
        soap \
        sockets \
        opcache \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \