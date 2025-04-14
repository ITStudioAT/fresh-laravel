## Installing
composer require itstudioat/fresh-laravel

## Publishing
php artisan vendor:publish --tag=fresh-laravel-all --ansi --force

## Prepare Installation and install
php artisan fresh-laravel:install
npm install

## Edit .env config.app
Make sure, your values are correct

## routes/web.php
Delete the Initial route /

## place logo and facivon
Place the logo and the facivon.ico into the folder storage/app/public/images

# config istudio.php
Adapt the values in the config-file config/itstudio.php

## Link your Storage-Folder
php artisan storage:link





