<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('nerds', 'NerdController');

/* OLD ROUTING
Route::get('login', array('uses'=>'HomeController@showLogin'));
Route::post('login', array('uses'=>'HomeController@doLogin'));
*/

Route::get('login','SessionController@create');
Route::get('logout','SessionController@destroy');
Route::resource('session','SessionController');