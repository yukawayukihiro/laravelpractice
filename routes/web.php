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

use App\Http\Middleware\HelloMiddleware; 

Route::get('hello','HelloController@index')->name('hello');
Route::get('hello/add','HelloController@add')->name('add');
Route::post('hello/add','HelloController@create')->name('create');
Route::get('hello/edit','HelloController@edit')->name('edit');
Route::post('hello/edit','HelloController@update')->name('update');
Route::get('hello/del','HelloController@del')->name('del');
Route::post('hello/del','HelloController@remove')->name('remove');
Route::get('hello/show','HelloController@show')->name('show');
