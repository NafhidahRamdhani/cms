<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', 'HomeController');
Route::get('/', function(){
    return view('welcome');
});
Route::get('/about', 'AboutController');
Route::get('/article/{id}', 'ArticleController');


Auth::routes();

Route::get('/home', 'Home1Controller@index')->name('home');
