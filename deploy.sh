#!/bin/bash

cp config/app.prod.php config/app.php
cp config/database.prod.php config/database.php
composer update
chmod 777 -R vendor
cp .env.prod .env
php artisan key:generate
# php artisan serve