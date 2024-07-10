FROM php:8.2-apache
RUN apt-get update && apt-get install -y \
    nano \
    libzip-dev \
    libssl-dev \
    zip \ 
    apt-utils \
    pkg-config \
    curl \
    openssh-client
RUN docker-php-ext-install pdo pdo_mysql mysqli zip
RUN a2enmod rewrite
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
WORKDIR /build/php
COPY php.ini /usr/local/etc/php