FROM php:8.2-apache

RUN a2enmod rewrite
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update && apt-get install -y zip unzip vim libpq-dev zlib1g-dev libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev libicu-dev && docker-php-ext-install pdo pdo_pgsql

# GD
RUN docker-php-ext-configure gd --with-freetype --with-jpeg=/usr/include/ --enable-gd
RUN docker-php-ext-install gd intl
RUN docker-php-ext-enable gd

# Set working directory
WORKDIR /var/www/html

USER $user