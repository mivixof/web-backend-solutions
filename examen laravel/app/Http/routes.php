<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/' , 'TodoController@home' );

Route::get('home' , 'TodoController@home' );

Route::get('todo' , 'TodoController@overview' );

Route::post('todo' , 'TodoController@add' );

Route::get('todo/add' , 'TodoController@addpage' );

Route::get('dashboard' , 'TodoController@dashboard');

Route::post('todo/edit' , 'TodoController@toedit' );

Route::post('done/edit' , 'TodoController@doedit' );

Route::post('todo/delete' , 'TodoController@delete' );






Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
