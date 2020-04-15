FROM php:7.3-apache

COPY . /var/www/html

RUN  apt-get update && apt-get install -y \
    libxml2-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-install xmlrpc gd intl zip soap opcache pdo_mysql mysqli mbstring
    
