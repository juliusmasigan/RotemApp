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
	if(!Session::has('uid')) {
		return View::make('admin.login');
	}else {
		return Redirect::route('dashboard');
	}
});

Route::get('login', function()
{
	return View::make('admin.login');
});

Route::post('login', 'AdminController@login');

Route::get('logout', 'AdminController@logout');

Route::get('register', function()
{
	return View::make('admin.register');
});

Route::post('register', 'AdminController@register');

Route::post('post_register', 'AdminController@post_register');

Route::get('teachers/register', function()
{
	return View::make('teacher.register');
});

Route::post('teacher/register', 'TeacherController@register');

Route::get('dashboard', array('as' => 'dashboard', function()
{
	if(!Session::has('uid'))
		return Redirect::to('/');

	return View::make('admin.dashboard', array('page' => 'dashboard'));	
}));

Route::get('reports', function()
{
	return View::make('reports');
});

Route::get('messages', function()
{
	return View::make('messages');
});

Route::get('media', function()
{
	return View::make('media');
});

Route::get('forgotPassword', function()
{
	return View::make('forgotPassword');
});

Route::get('alerts', function()
{
	return View::make('alerts');
});
