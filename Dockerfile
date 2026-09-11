FROM php:8.2-cli-alpine

WORKDIR /app

# Dépendance système et extension PHP curl
RUN apk add --no-cache curl-dev \
    && docker-php-ext-install curl

# Récupération binaire de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installation des dépendances sans bloquer si lock absent
COPY composer*.json ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Copie du code source
COPY . .

EXPOSE 3000

# Démarrage du serveur PHP intégré
CMD ["php", "-S", "0.0.0.0:3000", "-t", "public"]