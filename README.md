# Mgahed Laravel Starter Kit
![Packagist Version](https://img.shields.io/packagist/v/mgahed/laravel-starter-kit?style=flat&color=blue)
![Packagist Downloads](https://img.shields.io/packagist/dt/mgahed/laravel-starter-kit?style=flat&color=blue)
![Packagist License](https://img.shields.io/packagist/l/mgahed/laravel-starter-kit?style=flat&color=green)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/mgahed/laravel-starter-kit?style=flat&color=purple)
![Packagist Stars](https://img.shields.io/github/stars/mgahed/laravel-starter-kit?style=flat&color=orange)

The package `mgahed/laravel-starter-kit` allows you to easily use starter templates for your Laravel projects.

This is a Laravel Starter Kit project, This
kit supports authentication and (view, edit, delete) profile using Saul theme. And you can easily customize and use the theme features in your project.

## Installation

```bash
laravel new --using=mgahed/laravel-starter-kit
```

## Publishing

#### assets
```bash
php artisan vendor:publish --tag="mgahed-laravel-starter-assets"
```

This will add folder assets to the `public` path in your Laravel project.


#### migrations
```bash
php artisan vendor:publish --tag="mgahed-laravel-starter-migrations"
```

#### seeders
```bash
php artisan vendor:publish --tag="mgahed-laravel-starter-seeders"
```

## Running Migrations

```bash
php artisan migrate --path=database/migrations/mgahed-laravel-starter
```

## Running Seeders

```bash
php artisan db:seed --class=Mgahed\LaravelStarter\Database\Seeders\MgahedStarterSitesSeeder
```

```bash
php artisan db:seed --class=Mgahed\LaravelStarter\Database\Seeders\MgahedStarterMenusSeeder
```

## Features supported
* Authentication
* Profile (view, edit, delete)
* Easy translation system
* Saul Theme supported
* Easy to customize
* Easy menu customization
* Supports `mcamara/laravel-localization` package
    * publish the config file `php artisan vendor:publish --provider="Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider"`
    * See docs [here](https://github.com/mcamara/laravel-localization)
* Supports `spatie/laravel-translatable` package
    * See docs [here](https://spatie.be/docs/laravel-translatable/v5/introduction)

## Supported Links

- [Saul Theme](https://keenthemes.com/products/saul-html-free)
