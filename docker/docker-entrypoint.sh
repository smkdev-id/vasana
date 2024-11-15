#!/bin/bash
set -e

# Check if .env file exists, if not create it and generate an APP_KEY
if [ ! -f ".env" ]; then
    echo "Creating .env file..."
    echo APP_ENV=prod > .env
    echo APP_DEBUG=false >> .env
    echo APP_KEY= >> .env
    php artisan key:generate --quiet --no-interaction
    echo ".env file created and APP_KEY generated."
fi

php artisan migrate --quiet --no-interaction
php artisan storage:link --quiet --no-interaction
php artisan cache:clear --quiet --no-interaction
php artisan config:clear --quiet --no-interaction
php artisan route:clear --quiet --no-interaction
php artisan view:clear --quiet --no-interaction
php artisan optimize:clear --quiet --no-interaction
php artisan filament:optimize --quiet --no-interaction

# Set ownership of the files to www-data user
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Execute the CMD passed as arguments
exec "$@"