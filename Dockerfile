FROM php:8.2-apache

# Instalar mysqli
RUN docker-php-ext-install mysqli

# Ativar mod_rewrite
RUN a2enmod rewrite

# Copiar arquivos
COPY . /var/www/html/