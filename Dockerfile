FROM php:8.1-fpm

# Laravel uchun kerakli kengaytmalarni o'rnatish
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Composer o'rnatish
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

# Laravel uchun kerakli fayllarni qo'shish
COPY . .

RUN composer install --no-dev --optimize-autoloader

EXPOSE 9000
CMD ["php-fpm"]
