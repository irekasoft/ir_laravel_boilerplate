# iRekaSoft Laravel Boilerplate

Laravel (6.x) + React(16.2.x) setup for web application.
Utilizing Bootstrap 5.

### Clone to your Machine

Using terminal, go to your development folder.

`$ git clone https://github.com/irekasoft/ir_laravel_boilerplate.git <your_project>`

### Go to the Directory

`cd <your_project>`

> *Tips to reset Git Commit to a new one*
>
> `$ rm -rf .git && git init`

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

or adding some spice

`$ php artisan make:view hello --extends=layouts.master --section=content`

### Documentation 

Laravel Documentation:

https://laravel.com/docs/6.x/authentication

### Using Valet 

`$ valet link <yoursite>`

--------------------------------------------

## Create a Seeder

How to make seeder file (already created)

`$ php artisan make:seeder TasksTableSeeder`

To seed the db

`$ composer dump-autoload`

`$ php artisan db:seed --class=TasksTableSeeder`
