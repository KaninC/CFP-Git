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

Route::group(['prefix' => LaravelLocalization::setLocale()], function() 
{
	Route::get('/', function()
	{
		return view('main');
	});

	Route::get('home', function()
	{
		return view('home');
	});

	Route::get('committees', function()
	{
		return view('committees');
	});

	Route::get('document', function()
	{
		return view('document');
	});

	Route::get('contact', function()
	{
		return view('contact');
	});

	Route::get('poster', function()
	{
		return view('poster');
	});

	Route::get('status', function()
	{
		return view('status');
	});
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);
