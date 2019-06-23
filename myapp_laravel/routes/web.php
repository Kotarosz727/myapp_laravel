<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PlaysController@index');
Route::get('/plays/new', 'PlaysController@new');
Route::get('/plays/{id}', 'PlaysController@show')->where('plays','[0-9]+');
Route::post('/plays', 'PlaysController@create');
Route::get('/plays/edit', 'PlaysController@edit');
Route::post('/plays', 'PlaysController@update')
