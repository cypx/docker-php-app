FROM php:7.4-fpm
    
RUN docker-php-ext-install mysqli

COPY docker/php/www.conf /usr/local/etc/php-fpm.d/www.conf

COPY app /srv/www/app