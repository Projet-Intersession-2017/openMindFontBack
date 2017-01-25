#!/bin/bash

php artisan migrate --seed
``

php artisan db:seed --class=GroupTableSeeder
php artisan db:seed --class=RoleTableSeeder
php artisan db:seed --class=CategoryTableSeeder
php artisan db:seed --class=TypeTableSeeder
php artisan db:seed --class=ExamenTableSeeder
php artisan db:seed --class=SurveyTableSeeder
php artisan db:seed --class=QuestionTableSeeder
php artisan db:seed --class=ChoiceTableSeeder
php artisan db:seed --class=UserTableSeeder