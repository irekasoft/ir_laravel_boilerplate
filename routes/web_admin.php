<?php 

///////////////////////////////////
// ADMIN
//

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

  Route::get('/',function(){
    return redirect('/admin/dashboard');
  });

  Route::get('/dashboard', 'AdminController@index');

  Route::get('/home', 'HomeController@index')->name('dashboard');

  Route::get('/masterdetail', 'AdminController@masterdetail');

  Route::view('/react', 'admin.react');  

  Route::resource('tasks','AdminTasksController',['as'=>'admin']);

});

