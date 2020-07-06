# Challenge AgroMonitoring + LeafLet + Laravel

This project provides a web solution for manage maps and images from satellites. Applying AgroMonitoring to get images from API, LeafLeft to show the maps and imagens, together with PHP and Laravel to CRUD users and data.

## Requirements

- [ ] Get satellite images from Agro API
- [ ] Use LeftLet and GoogleMaps(Satellite)
- [x] Use MySQL as database
- [x] Use PHP with Laravel
- [x] 5 locations available to search images
- [x] Create and auth users with roles (Viewers and Admins)
- [x] Admin users can define the specific locations that will get images
- [x] Admin users controls who is Viewer or Admin

## Build With

- [PHP 7.x](https://www.php.net)
- [Laravel 7.x](https://laravel.com)
- [MySQL](https://www.mysql.com)
- [Google Maps](https://cloud.google.com/maps-platform/)
- [AgroMonitoring](https://agromonitoring.com)
- [LeafLet](https://leafletjs.com)

## Run
    git clone https://github.com/ValdirJunior/challenge-agro-leaf-laravel.git
    cd challenge-agro-leaf-laravel
    composer install
    cp .env.example .env
    php artisan key:generate
    mysql> create database <name_of_your_database>
    <config your .env with database name, username and password>
    php artisan migrate
    php artisan laravel_web:bootstrap
    php artisan db:seed
    php artisan serve