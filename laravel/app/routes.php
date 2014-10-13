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

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::get('/', 'HomeController@showWelcome');


/*
|--------------------------------------------------------------------------
| Login Section
|--------------------------------------------------------------------------
|
*/
Route::get('login', function()
{
	// show the login page (app/views/login.blade.php)
	return View::make('layouts.login',array(
			'page_title' => 'Signin Template for Bootstraps'
			)
		);
});
Route::post('login', array('uses' => 'LoginController@process'));
