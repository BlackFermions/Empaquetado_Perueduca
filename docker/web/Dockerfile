FROM php:5.6-apache

RUN a2enmod rewrite

RUN docker-php-ext-install mysql mysqli

COPY docker/web/apache.conf /etc/apache2/conf-available/perueduca.conf
RUN a2enconf perueduca

COPY server/PeruEduca/htdocs/portal /var/www/html/

COPY docker/web/config.php /var/www/html/libreria/config.php
COPY docker/web/funciones.php /var/www/html/libreria/funciones.php
