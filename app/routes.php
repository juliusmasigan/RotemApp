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
	return View::make('index');
});

Route::get('login', function()
{
	return View::make('login');
});

Route::post('login', 'UserController@login');

Route::get('register', function()
{
	return View::make('register');
});

Route::post('/register', 'UserController@register');

Route::get('dashboard', function()
{
	return View::make('dashboard');
});

Route::get('reports', function()
{
	return View::make('reports');
});

Route::get('messages', function()
{
	return View::make('messages');
});