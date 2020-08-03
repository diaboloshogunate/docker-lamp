FROM php:7.4-apache
RUN docker-php-ext-install pdo_mysql
COPY docker/php/dev.ini /usr/local/etc/php/conf.d/dev.ini
COPY docker/php/local.ini /usr/local/etc/php/conf.d/local.ini
COPY docker/bin/wait-for-it.sh /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it
CMD wait-for-it db:3306 -t 30 -- apache2-foreground