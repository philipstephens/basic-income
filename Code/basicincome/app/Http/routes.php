<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
	Route::get('/basicincome/{s_pergdp}/{s_pcratio}/{s_year}', 'GdprecordsController@index');
	Route::get('/basicincome', 'SettingsController@index2');
	Route::post('/basicincome/settings', 'SettingsController@index');
	Route::get('/basicincome/continents', 'ContinentsController@index');
	Route::get('/basicincome/countries', 'CountriesController@index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


