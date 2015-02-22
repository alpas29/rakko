<?php

/*
|--------------------------------------------------------------------------
| Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

	Route::get('profiles/welcome', array(
		'uses'=>'ProfilesController@welcome'
		));

/*
Route::group(['prefix' => 'Profiles'], function() {
	Route::get('/', function() {
		dd('This is the Profiles module index page.');
	});
});
*/
	Route::resource('profiles', 'ProfilesController');


# API data
	Route::get('api/profiles', array(
	//	'as'=>'api.users',
		'uses'=>'ProfilesController@data'
		));
