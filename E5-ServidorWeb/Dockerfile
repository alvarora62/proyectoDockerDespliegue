# Usar la imagen oficial de PHP con Apache
FROM php:7.4-apache

# Copiar los archivos del sitio web al directorio raíz del servidor
COPY . /var/www/html/

# Exponer el puerto 8000 para acceder a la aplicación
EXPOSE 8000

# Iniciar Apache en segundo plano
CMD ["apache2-foreground"]