FROM php:8.3-cli
RUN docker-php-ext-install pdo_sqlite
WORKDIR /app
CMD ["php", "-S", "0.0.0.0:8000", "-t", "19-recherche-web"]
