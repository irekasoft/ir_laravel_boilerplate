# iRekaSoft Laravel Boilerplate

Laravel (5.8.x) + React(16.2.x) setup for web application.
Utilizing Bootstrap 5.

### Clone to your Machine

Using terminal, go to your development folder.

`$ git clone git@github.com:irekasoft/ir_laravel_boilerplate.git`

### Setup Project

First Laravel setup:

`$ cp env.example .env`

`$ composer install`

`$ php artisan key:generate`



Setup React

`$ yarn install`

To keep compoiling the build files.

`$ yarn watch`


### How to setup auth 

Setup .env file to setup integration with mysql.

`$ php artisan migrate`

## Make a view 

Make a blade view file at views/hello.blade.php by typing.

`$ php artisan make:view hello`




### Documentation 

Laravel Documentation:

https://laravel.com/docs/5.8/authentication

### Using Valet 

`$ valet link <yoursite>`

