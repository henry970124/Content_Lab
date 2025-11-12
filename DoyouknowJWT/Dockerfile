FROM php:8.2-apache

ENV FLAG="SAIHS{W0w_Y0u_4r3_g00d_4T_H4ck1ng....}"

WORKDIR /var/www/html

COPY *.php /var/www/html/
COPY robots.txt /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
