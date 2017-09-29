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

Route::get('/', 'PagesController@index')->name('home.index');
Route::get('/about', 'PagesController@about')->name('home.about');
Route::get('/services', 'PagesController@services')->name('home.services');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
