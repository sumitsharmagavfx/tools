FROM composer:1.9 as builder

WORKDIR /app

COPY composer.* ./

RUN composer install

FROM php:7.3-apache

WORKDIR /var/www/

COPY --from=builder /app/vendor /var/www/vendor

COPY . .

COPY public/* /var/www/html/

RUN php artisan key:gen

RUN chown www-data:www-data ./ -R

EXPOSE 80
