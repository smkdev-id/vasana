#!/bin/bash
set -e
cd /var/www/html

# Fetch the latest version from the source directory
LATEST_VERSION=$(cat "/usr/src/smkdev/version")

# Compare versions and update the application if needed
if [ -f "version" ]; then
    CURRENT_VERSION=$(cat "version")
    if [ "$CURRENT_VERSION" != "$LATEST_VERSION" ]; then
        echo "Updating application from version $CURRENT_VERSION to $LATEST_VERSION..."
        rm -rf ./*
        cp -r /usr/src/smkdev/* .
        echo "Application updated successfully."
    else
        echo "Application is up-to-date (version $CURRENT_VERSION)."
    fi
else
    echo "Version file not found. Copying the latest application version..."
    cp -r /usr/src/smkdev/* .
    echo "Application copied successfully."
fi

# Put the application in maintenance mode before performing any tasks
php artisan down

# Run composer install if vendor directory does not exist
if [ ! -d "vendor" ]; then
    echo "Vendor directory not found. Running composer install..."
    composer install --quiet --no-interaction --optimize-autoloader --prefer-dist --no-dev
    echo "Composer install completed."
fi

# Ensure .env file exists and generate APP_KEY if needed
if [ ! -f ".env" ]; then
    echo "Creating .env file and generating APP_KEY..."
    echo "APP_KEY=" > .env
    php artisan key:generate --quiet --no-interaction
    echo "APP_KEY generated successfully."
fi

# Check if DB_CONNECTION environment variable is set to sqlite
if [ -z "$DB_CONNECTION" ]; then
    echo "DB_CONNECTION is not set. Using default connection: sqlite"
    DB_CONNECTION="sqlite"  # Set a default value if DB_CONNECTION is empty
fi

if [ "$DB_CONNECTION" == "sqlite" ]; then
    echo "SQLite detected. Ensuring database file exists..."

    # Check if the SQLite database file exists
    if [ ! -f "database/database.sqlite" ]; then
        echo "Creating database.sqlite file..."
        touch database/database.sqlite  # Create the SQLite database file
        echo "database.sqlite created successfully."
    fi
fi

# Run necessary Artisan commands
echo "Running Laravel Artisan commands..."

# Run database migrations if necessary (adjust as needed)
if php artisan migrate:status --quiet | grep --quiet "No migrations found"; then
    echo "No migrations to run."
else
    echo "Running migrations..."
    php artisan migrate --quiet --no-interaction --env=staging
    echo "Migrations completed."
fi

# Ensure storage symbolic link exists
if [ ! -L "storage" ]; then
    echo "Creating storage symbolic link..."
    php artisan storage:link --quiet --no-interaction
    echo "Storage symbolic link created."
fi

# Clear various Laravel caches (config, route, view, etc.)
echo "Clearing Laravel caches..."
php artisan cache:clear --quiet --no-interaction
php artisan config:clear --quiet --no-interaction
php artisan route:clear --quiet --no-interaction
php artisan view:clear --quiet --no-interaction
php artisan optimize:clear --quiet --no-interaction
php artisan filament:optimize --quiet --no-interaction
echo "Caches cleared."

# Set ownership and permissions for necessary directories
echo "Setting file permissions for storage and cache directories..."
chown -R www-data:www-data .
chmod -R 775 ./storage ./bootstrap/cache
echo "Permissions set successfully."

# Bring the application back online
php artisan up

# Start the application (typically Apache)
echo "Starting the application..."
exec "$@"
