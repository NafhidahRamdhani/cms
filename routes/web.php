<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@homeView')->name('articleView');
Route::get('/about', 'AboutController');
Route::get('/article/{id}', 'ArticleController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
