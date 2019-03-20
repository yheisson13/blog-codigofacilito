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

Route::get('/', ['as' => 'admin.index', function () {
    return view('welcome');
}]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('/', ['as' => 'admin.index', function () {
	    return view('welcome');
	}]);

	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses'	=> 'UsersController@destroy',
		'as'	=> 'admin.users.destroy'
	]);

	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses'	=> 'CategoriesController@destroy',
		'as'	=> 'admin.categories.destroy'
	]);

});

Route::get('admin/auth/login', [
	'uses'	=> 'Auth\AuthController@getLogin',
	'as'	=> 'admin.auth.login'
]);

Route::post('admin/auth/login', [
	'uses'	=> 'Auth\AuthController@postLogin',
	'as'	=> 'admin.auth.login'
]);

Route::get('admin/auth/logout', [
	'uses'	=> 'Auth\AuthController@getLogout',
	'as'	=> 'admin.auth.logout'
]);
