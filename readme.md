# iRekaSoft Laravel Boilerplate

Laravel (8.x) + React(16.2.x) setup for web application.

Utilizing Bootstrap 4.x.

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


### How to setup Database

Setup .env file to setup integration with MySQL.

`$ php artisan migrate`



## Setup React

`$ yarn install`

To keep watching files & compiling.

`$ yarn watch`


## Update Laravel when Composer Updated

`$ composer update`


### Documentation 

Laravel Documentation:

https://laravel.com/docs/8.x/authentication



### Using Valet (for Mac)

`$ valet link <yoursite>`

`$ valet secure <yoursite>`

--------------------------------------------

## Create a Seeder

How to make seeder file (already created)

`$ php artisan make:seeder TasksTableSeeder`

To seed the db

`$ composer dump-autoload`

`$ php artisan db:seed --class=TasksTableSeeder`

## Generate React

`$ php artisan create:react pages/MyPage`


------------------------

## Change PHP Version 

$ brew use php@8.2