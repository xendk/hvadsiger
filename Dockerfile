FROM php:8.3-apache

# Enable .htaccess (the site is a mod_rewrite front controller).
RUN a2enmod rewrite \
 && printf '<Directory /var/www/html>\n    AllowOverride All\n</Directory>\n' \
      > /etc/apache2/conf-available/htaccess.conf \
 && a2enconf htaccess

COPY www/ /var/www/html/
