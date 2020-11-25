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

// Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/manage', 'ManageController@manage')->name('manage');
Route::get('/manage/add','ManageController@add');
Route::post('/manage/create','ManageController@create');
Route::get('/manage/edit/{id}','ManageController@edit');
Route::post('/manage/update/{id}','ManageController@update');
Route::get('/manage/delete/{id}','ManageController@delete');

Route::get('/manageUser', 'ManageUserController@manageUser')->name('manageUser');
Route::get('/manageUser/addUser','ManageUserController@add');
Route::post('/manageUser/create','ManageUserController@create');
Route::get('/manageUser/editUser/{id}','ManageUserController@edit');
Route::post('/manageUser/update/{id}','ManageUserController@update');
Route::get('/manageUser/delete/{id}','ManageUserController@delete');


Auth::routes();
Route::get('/home', 'home1Controller@index')->name('home');

Route::get('/manage/cetak_pdf', 'ArticleController@cetak_pdf');
Route::get('/coba/coba_pdf', 'ManageUserController@coba_pdf');




