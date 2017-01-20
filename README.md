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

php artisan backpack:crud users
```