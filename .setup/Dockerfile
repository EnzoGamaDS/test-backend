FROM php:8.1.9-fpm-alpine3.15

# Install dependencies
RUN apk add --no-cache $PHPIZE_DEPS nginx git libzip-dev openssl-dev libmcrypt-dev unzip libmcrypt supervisor
RUN apk add --update linux-headers
# Installing php extensions
RUN docker-php-ext-install zip mysqli pdo_mysql bcmath
RUN pecl install xdebug redis mongodb && docker-php-ext-enable xdebug redis mongodb
# Copy application to correct directory and set root
ENV DOCUMENT_ROOT /var/www/html
COPY . $DOCUMENT_ROOT
WORKDIR $DOCUMENT_ROOT
# Nginx configuration
COPY .setup/nginx/nginx.conf /etc/nginx/nginx.conf
RUN rm -f /etc/nginx/conf.d/*
# Create necessary directories
RUN mkdir -p /run/nginx \
    && mkdir -p /var/log/supervisor \
    && mkdir -p /etc/nginx/conf.d \
    && mkdir -p /etc/supervisor.d
# PHP FPM configuration
COPY .setup/php/php-fpm-www.conf /usr/local/etc/php-fpm.d/www.conf
# PHP ini configuration
COPY .setup/php/php.ini /usr/local/etc/php/conf.d/app.ini
# Supervisor configuration
COPY .setup/supervisor/supervisor.conf /etc/supervisor.d/supervisord.conf
# Set permissions
RUN chown -R www-data:www-data $DOCUMENT_ROOT \
    && chown -R www-data:www-data /run/nginx \
    && chown -R www-data:www-data /var/log/nginx \
    && chown -R www-data:www-data /var/log/supervisor

RUN chmod 777 /var/www/html

# Installing composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Redirect logs to process output
RUN ln -sf /dev/stdout /var/log/nginx/access.log && ln -sf /dev/stderr /var/log/nginx/error.log
CMD ["supervisord", "-n", "-c", "/etc/supervisor.d/supervisord.conf"]
