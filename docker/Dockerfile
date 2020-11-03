FROM php:7.3-fpm

RUN apt-get update
RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
