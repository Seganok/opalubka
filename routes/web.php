<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'uses' => 'PagesController@getIndex',
	'as' => '/']);


Route::get('contacts', [
	'uses' => 'PagesController@getContacts',
	'as' => 'contacts']);

Route::get('about', [
	'uses' => 'PagesController@getAbout',
	'as' => 'about']);

Route::get('google4d6b7f4dfee43ef7', [
	'uses' => 'PagesController@getgoogle4d6b7f4dfee43ef7',
	'as' => 'google4d6b7f4dfee43ef7']);

Auth::routes();

Route::resource('home', 'HomeController');
Route::resource('goods', 'GoodsController');
Route::get('getFilterRequest', 'GoodsController@getFilterRequest');


//Для того чтоб заходили только зарегистрированые пользователи
// Route::group(['middleware' => 'auth'], function()
// {});								

