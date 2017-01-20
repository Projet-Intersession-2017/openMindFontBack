#!/bin/bash

php artisan migrate --seed
php artisan db:seed --class=RoleTableSeeder