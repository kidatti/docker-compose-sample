FROM php:8.2-fpm

WORKDIR /workspace

# pdo
RUN docker-php-ext-install pdo pdo_mysql

# 各種インストール
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libicu-dev \
    libzip-dev

# GD
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Intl
RUN docker-php-ext-install intl

# mbstring
RUN docker-php-ext-install mbstring

# Zip
RUN docker-php-ext-install zip

# Redis
RUN pecl install redis \
    && docker-php-ext-enable redis

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Node.js, npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

ENV COMPOSER_ALLOW_SUPERUSER=1

CMD ["php-fpm"]

EXPOSE 9000
