# Serving multiple apps with one Laravel codebase using subdomain routing
> Demo on how to serve multiple applications with one Laravel codebase using subdomain routing.

[View tutorial](http://blog.pusher.com/laravel-subdomain-routing/)

## Requirements
- Basic knowledge of the [Laravel framework](https://laravel.com).
- Laravel CLI installed on your machine.
- [Valet](https://laravel.com/docs/5.6/valet#installation) installed on your machine.
- A code editor like [Visual Studio Code](https://code.visualstudio.com).
- [SQLite installed](http://www.sqlitetutorial.net/download-install-sqlite/) on your machine.

> ⚠️  Valet is only officially available to Mac users. However, there are ports for both [Linux](https://github.com/cpriego/valet-linux) and [Windows](https://github.com/cretueusebiu/valet-windows) available.

## Getting Started
To get up and running, simply run the following commands, first clone the repository and run the following commands
- `$ composer install`
- `$ valet link acme`
- `$ valet link api.acme`
- `$ valet link admin.acme`

Next, copy the `.env.example` file to `.env` and then add your database keys, and the `APP_BASE_DOMAIN`. Run the command below:
- `$ php artisan migrate --seed`

And you are good to go.

## Built with
* [Laravel](https://laravel.com) - PHP framework
