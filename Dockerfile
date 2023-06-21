FROM php:8.0-fpm-alpine

RUN apk update && \
    apk add git

ENV APP_ENV=prod

WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Composer update

    
RUN git clone https://github.com/timoogo/liaisons-dangereuses-webook.git --depth=1 /var/www/html && \
    rm -rf .git

RUN composer install --no-dev --no-cache --no-interaction --no-progress --optimize-autoloader