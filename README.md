# API Boilerplate

This boilerplate is a Laravel App that has got the GetCandy API and Sanctum preconfigured out the box.

## Usage

Copy `env.example` to `.env`

Install dependencies

```bash
composer install
```

Run the installer

```bash
php artisan candy:install
```

Boot up the API

```bash
php artisan serve --host=localhost
```

## Features

- Sanctum configured out the box
- Initial `login` and `logout` routes added to authenticate users
- CORS set up
- Ready to be used with the hub
