FROM node:latest as npm_stage
WORKDIR /app
COPY package.json .
COPY package-lock.json .
RUN npm install

FROM composer:latest as composer_stage
WORKDIR /app
COPY composer.json .
COPY composer.lock .
COPY . /app
RUN composer install --ignore-platform-reqs --no-dev -a -vvv

FROM dunglas/frankenphp
RUN install-php-extensions pcntl pdo_pgsql intl
COPY --from=npm_stage /app /app
COPY --from=composer_stage /app /app
COPY . /app
RUN php artisan cache:clear
RUN php artisan config:clear
RUN php artisan view:clear

WORKDIR /app
ENTRYPOINT ["php", "artisan", "octane:frankenphp"]
