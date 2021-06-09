
FROM php:7.2-apache

COPY ./php.ini-development /usr/local/etc/php/php.ini

RUN docker-php-ext-install pdo_mysql
