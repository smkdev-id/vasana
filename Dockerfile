# Stage 1: Install npm
FROM node:latest as npm_stage
WORKDIR /app
COPY package.json .
RUN npm install

# Stage 2: Install composer and Octane
FROM composer:latest as composer_stage
WORKDIR /app
COPY composer.json .
COPY composer.lock .
COPY . /app
RUN composer install --ignore-platform-reqs --no-dev -a -vvv

# Stage 3: Run frankenphp
FROM dunglas/frankenphp
RUN install-php-extensions pcntl pdo_pgsql intl
COPY --from=npm_stage /app /app
COPY --from=composer_stage /app /app
COPY . /app
# RUN php artisan optimize:clear

WORKDIR /app
ENTRYPOINT ["php", "artisan", "octane:frankenphp"]