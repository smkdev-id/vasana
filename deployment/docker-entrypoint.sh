#!/bin/bash
set -e

# Check if autoload.php file exists, if not run composer install
if [ ! -f "vendor/autoload.php" ]
then
    echo "Running 'composer install'"
    composer install --quiet --no-interaction --no-dev --prefer-dist --optimize-autoloader
fi

# Check if .env file exists, if not create it and generate an APP_KEY
if [ ! -f ".env" ]; then
    echo "Creating .env file..."
    echo APP_ENV=local > .env
    echo APP_DEBUG=true >> .env
    echo APP_KEY= >> .env
    php artisan key:generate --quiet --no-interaction
    echo ".env file created and APP_KEY generated."
fi

# Check if database.sqlite file exists, if not run php artisan migrate
if [ ! -f "database/database.sqlite" ]; then
    echo "Running 'php artisan migrate'"
    php artisan migrate --quiet --no-interaction --force
fi

# Check if storage folder exists, if not run php artisan storage:link
if [ ! -d "public/storage" ]; then
    echo "Running 'php artisan storage:link'"
    php artisan storage:link --quiet --no-interaction --force
fi

# Laravel Filament Optimizations
echo "Running 'php artisan optimize'"
php artisan optimize --quiet --no-interaction
php artisan filament:optimize --quiet --no-interaction

# Set ownership of the files to www-data user
chown -R www-data:www-data /var/www/html
# chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Execute the CMD passed as arguments
exec "$@"