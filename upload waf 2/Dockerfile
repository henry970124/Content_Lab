FROM php:8.2-apache
WORKDIR /var/www/html
COPY index.php /var/www/html/
RUN mkdir -p /var/www/html/upload \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod 777 /var/www/html/upload
EXPOSE 80
CMD ["apache2-foreground"]
