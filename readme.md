# iRekaSoft Laravel Boilerplate

Laravel (6.x) + React(16.2.x) setup for web application.
Utilizing Bootstrap 5.

### Clone to your Machine

Using terminal, go to your development folder.

`$ git clone https://github.com/irekasoft/ir_laravel_boilerplate.git`

### Go to the Directory

`cd ir_laravel_boilerplate`

Open in VS Code 

`$ code .`

### Setup Project

First Laravel setup:

`$ composer install`

`$ cp .env.example .env`

`$ php artisan key:generate`


### How to setup auth 

Setup .env file to setup integration with mysql.

`$ php artisan migrate`




## Setup React

`$ yarn install`

To keep compoiling the build files.

`$ yarn watch`


## Update Laravel when Composer Updated

`$ composer update`


## Make a view 

Make a blade view file at views/hello.blade.php by typing.

`$ php artisan make:view hello`




### Documentation 

Laravel Documentation:

https://laravel.com/docs/5.8/authentication

### Using Valet 

`$ valet link <yoursite>`

