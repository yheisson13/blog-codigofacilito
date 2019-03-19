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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses'	=> 'UsersController@destroy',
		'as'	=> 'admin.users.destroy'
	]);

});