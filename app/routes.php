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

Route::get('/', 'HomeController@index');
Route::get('member', 'HomeController@member');

/*
| Api Page
=====
*/
//Route::pattern('id', '[0-9]+');

Route::group(['prefix' => 'api','after' => 'allowOrigin'], function() {

		Route::post('/login', 'HomeController@doLogin');//login

	});