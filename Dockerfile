FROM php:8.1-fpm

# Install required packages
RUN apt-get update && apt-get install -y \
    nginx \
    libicu-dev \
    libxml2-dev \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    libldap2-dev \
    libmariadb-dev \
    unzip \
    && docker-php-ext-install intl xml zip gd mysqli pdo pdo_mysql

# Copy SuiteCRM files
. /var/www/html

# Copy Nginx config
COPY nginx.conf /etc/nginx/nginx.conf

# Expose port 80
EXPOSE 80

# Start Nginx + PHP-FPM
CMD service nginx start && php-fpm
