FROM ubuntu:22.04

# Instala pacotes essenciais, PHP 8.1 + extensões, Nginx, Supervisor e Composer
RUN apt-get update && \
    DEBIAN_FRONTEND="noninteractive" apt-get install -y \
    nginx \
    php8.1 \
    php8.1-fpm \
    php8.1-bcmath \
    php8.1-bz2 \
    php8.1-mbstring \
    php8.1-opcache \
    php8.1-mysql \
    php8.1-curl \
    php8.1-gd \
    php8.1-dom \
    php8.1-simplexml \
    php8.1-xdebug \
    php8.1-redis \
    php8.1-zip \
    supervisor \
    git \
    unzip \
    curl \
    composer \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Ajuste no PHP-FPM
RUN sed -i 's/;listen.mode = 0660/listen.mode = 0666/' /etc/php/8.1/fpm/pool.d/www.conf

# Configuração Xdebug
RUN echo "xdebug.mode=develop,debug,coverage" >> /etc/php/8.1/mods-available/xdebug.ini \
    && echo "xdebug.discover_client_host=0" >> /etc/php/8.1/mods-available/xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /etc/php/8.1/mods-available/xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /etc/php/8.1/mods-available/xdebug.ini

# Copia configs personalizadas
COPY docker/nginx/nginx.conf /etc/nginx/sites-available/default
COPY docker/php/php.ini /etc/php/8.1/fpm/php.ini
COPY docker/supervisor/supervisord-setup.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/scripts/entrypoint.sh /usr/local/bin/entrypoint.sh

# Permissão para entrypoint e logs do supervisor
RUN chmod +x /usr/local/bin/entrypoint.sh \
    && chmod -R 777 /var/log/supervisor

# Diretório de trabalho
WORKDIR /var/www/html

EXPOSE 80

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
