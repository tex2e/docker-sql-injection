
FROM php:7.2-apache

COPY ./conf/php.ini-development /usr/local/etc/php/php.ini
COPY ./conf/apache2.conf /etc/apache2/apache2.conf

RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-install pdo_mysql pdo_pgsql
RUN a2enmod rewrite
