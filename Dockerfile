FROM php:8.3-apache

# Instalar la extensión PDO para MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copiar el código fuente al contenedor
COPY ./src /var/www/html

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exponer el puerto 80
EXPOSE 80
