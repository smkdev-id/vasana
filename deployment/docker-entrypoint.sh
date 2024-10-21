#!/bin/sh

set -e

LATEST_VERSION=$(cat "/usr/src/smkdev/version")

if [ -f "version" ]
then
    CURRENT_VERSION=$(cat "version")
    if [ $CURRENT_VERSION -ne $LATEST_VERSION ]
    then
        echo "Updating the app... ($CURRENT_VERSION => $LATEST_VERSION)"
        rm -rf ./*
        cp -r /usr/src/smkdev/* .
    fi
else
    echo "Copying the app... (Version: $LATEST_VERSION)"
    cp -r /usr/src/smkdev/* .
fi

if [ ! -f "node_modules/.package-lock.json" ]
then
    echo "Running npm install"
    npm install --quiet
    echo "Running npm run build"
    npm run build --quiet
fi

if [ ! -f "vendor/autoload.php" ]
then
    echo "Running composer install"
    composer install --quiet --no-interaction --no-dev
fi

if [ ! -f ".env" ]
then
    echo APP_ENV=prod > .env
    echo APP_DEBUG=false >> .env
    echo APP_KEY= >> .env
    php artisan key:generate --quiet --no-interaction
fi

chown -R www-data:www-data .

exec "$@"