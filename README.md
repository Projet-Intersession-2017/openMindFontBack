# IP

34.249.163.43

# openMindFontBack
laravel font back office

## Installation de composer

curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

## Installation

```
- git clone https://github.com/Projet-Intersession-2017/openMindFontBack
- git checkout branch-active
- composer install
- cp .env.example .env 
- php artisan key:generate
- php artisan serve
```

Ouvrir le naviguateur et lancer l'application via:

```
127.0.0.1:8000 
```
> N.B.:
>	si vous avez des erreurs lorsque vous vous rendez sur 127.0.0.1:8000, arrêter votre serveur et exécutez la commande suivante:


## FAQ

Class seed not found ?

```
composer dump-autoload -o 
```

## Manage database

### Connect
```
mysql -u USER -pPASSWORD

USE openmind;

SHOW COLUMNS FROM matable;

SELECT * FROM role;
```

### Troubleshootings

```
DROP DATABASE openmind;

CREATE DATABASE openmind;

GRANT ALL PRIVILEGES ON openmind.* TO 'root'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;

```

Go on project base path

```
php artisan migrate --seed

php artisan db:seed --class=RoleTableSeeder

```

### create crud 

```
php artisan backpack:crud users
```


### Production

Initialisation à faire une fois:  

```

git clone https://github.com/Projet-Intersession-2017/openMindFontBack.git
mv openMindFontBack openmind
cd openmind
```

Ensuite les updates : 

```
cd /var/www/html/openmind
git pull origin rc ou branch
./deploy.sh
```

Lancer le

```
./migrate-db.sh
```

Vérifier que tout fonctionne :

```
http://192.168.1.198/index.php
```

## Upload

## VHost
```
    <Directory /var/www/html/PROJECT_FOLDER/public>
            <IfModule mod_rewrite.c>
                    RewriteEngine On
                    RewriteCond %{REQUEST_FILENAME} !-f
                    RewriteCond %{REQUEST_FILENAME} !-d
                    RewriteRule ^(.*)$ /index.php/$1 [L]
            </IfModule>
    </Directory>
```


#### Bug with PHP7 with elfinder


```
On my local vagrant box
PHP 7.0.8-2+deb.sury.org~xenial+1
This works

    'route' => [
        'prefix'     => config('backpack.base.route_prefix').'/elfinder',
        'middleware' => ['web', 'auth'], //Set to null to disable middleware filter
    ],
On my live server
PHP 7.1.0-5+deb.sury.org~xenial+1
I had to change it to this to get the routes to work

    'route' => [
        'prefix'     => 'admin/elfinder',
        'middleware' => ['web', 'auth'], //Set to null to disable middleware filter
    ],
```