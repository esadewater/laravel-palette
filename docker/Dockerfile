FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update \
  && apt-get install -y git \
  && apt-get install -y libzip-dev libnotify-bin libpng-dev libjpeg62-turbo-dev unzip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www
