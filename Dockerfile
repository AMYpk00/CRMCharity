FROM php:8.1-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Allow .htaccess overrides and set directory permissions
RUN echo '<Directory /var/www/html/>\n    AllowOverride All\n    Require all granted\n</Directory>' >> /etc/apache2/apache2.conf

# Expose the port
EXPOSE 80

# Restart Apache in foreground
CMD ["apache2-foreground"]