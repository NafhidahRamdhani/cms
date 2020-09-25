<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');
Route::get('/about', 'AboutController');
Route::get('/article/{id}', 'ArticleController');