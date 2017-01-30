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


Route::get('kontakti', [
	'uses' => 'PagesController@getContacts',
	'as' => 'kontakti']);

Route::get('arenda_opalubki_sevastopol', [
	'uses' => 'PagesController@getAbout',
	'as' => 'arenda_opalubki_sevastopol']);

Route::get('google4d6b7f4dfee43ef7', [
	'uses' => 'PagesController@getgoogle4d6b7f4dfee43ef7',
	'as' => 'google4d6b7f4dfee43ef7']);

Route::get('sitemap', [
	'uses' => 'PagesController@getsitemap',
	'as' => 'sitemap']);

Auth::routes();

Route::resource('home', 'HomeController');
Route::resource('goods', 'GoodsController');
Route::get('getFilterRequest', 'GoodsController@getFilterRequest');


//Для того чтоб заходили только зарегистрированые пользователи
// Route::group(['middleware' => 'auth'], function()
// {});								

