FROM php:8.1-fpm
RUN apt-get update && apt-get install -y \
    mariadb-client \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www
COPY . /var/www

RUN composer install

CMD ["php-fpm"]
