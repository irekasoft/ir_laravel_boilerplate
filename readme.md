# iRekaSoft Laravel Boilerplate

Laravel (5.8.x) + React(16.2.x) setup for web application.
Utilizing Bootstrap 5.

### Clone to your Machine

Using terminal, go to your development folder.

`$ git clone git@github.com:irekasoft/ir_laravel_boilerplate.git`

### Setup Project

First Laravel setup:

`$ cp env.example .env`

`$ php artisan key:generate`

`$ composer install`



Setup React

`$ yarn install`

`$ yarn watch`


### Using Valet 

`$ valet link <yoursite>`

### Documentation 

Laravel Documentation:

https://laravel.com/docs/5.8/authentication

### How to setup auth 

Setup .env file to setup integration with mysql.

`$ php artisan migrate `
