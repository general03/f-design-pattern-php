FROM php:7.4-cli

RUN docker-php-ext-install pdo pdo_mysql 
# RUN apt install php7-mysql

COPY . /usr/src/app
WORKDIR /usr/src/app