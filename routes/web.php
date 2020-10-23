<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@homeView')->name('articleView');
Route::get('/about', 'AboutController');
// Route::get('/article/{id}', 'ArticleController@viewArticles');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/manage', 'ArticleController@index')->name('manage');
Route::get('/article/add','ArticleController@add');
Route::post('/article/create','ArticleController@create');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');
Route::get('/article/delete/{id}','ArticleController@delete');


