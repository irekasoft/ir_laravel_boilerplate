<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// For authentication
// -- register / login
Auth::routes();

// PUBLIC 

Route::get('/', function () {
  return view('welcome');
});

Route::view('/show_react','show_react');


/////////////////
// ADMIN
//
require_once __DIR__.'/web_admin.php';