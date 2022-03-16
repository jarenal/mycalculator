FROM php:7.4.28-apache
WORKDIR /root

RUN set -eux; \
	apt-get update; \
	apt-get install -y --no-install-recommends \
    acl

#Install xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

ENV APACHE_DOCUMENT_ROOT /var/www/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN a2enmod rewrite

RUN setfacl -R -m u:www-data:rwX /var/www
RUN setfacl -dR -m u:www-data:rwX /var/www