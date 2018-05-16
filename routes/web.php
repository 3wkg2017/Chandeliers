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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/cards', 'CardsController');
Route::get('/cards/imageviewer/{image}', 'CardsController@imageviewer')->name('cards.imageviewer');
Route::get('/cards/catalog/{sort_type}', 'CardsController@catalog')->name('cards.catalog');

Route::post('/cards/edit/{id}', 'CardsController@edit')->name('cards.edit');
Route::put('/cards/update/{id}', 'CardsController@update')->name('cards.update');

Route::resource('/abouts', 'AboutsController');
Route::post('/abouts/edit/{id}', 'AboutsController@edit')->name('abouts.edit');
Route::put('/abouts/update/{id}', 'AboutsController@update')->name('abouts.update');

Route::resource('/posts', 'PostsController');
Route::post('/posts/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::put('/posts/update/{id}', 'PostsController@update')->name('posts.update');

Route::resource('/links', 'LinksController');
Route::post('/links/edit/{id}', 'LinksController@edit')->name('links.edit');
 Route::put('/links/update/{id}', 'LinksController@update')->name('links.update');


Route::resource('/articles', 'ArticlesController');
Route::post('/articles/edit/{id}', 'ArticlesController@edit')->name('articles.edit');
Route::put('/articles/update/{id}', 'ArticlesController@update')->name('articles.update');

Route::resource('/englishs', 'EnglishsController');
Route::get('/englishs/show', 'EnglishsController@show')->name('englishs.show');
Route::post('/englishs/edit/{id}', 'EnglishsController@edit')->name('englishs.edit');
Route::put('/englishs/update/{id}', 'EnglishsController@update')->name('englishs.update');

Auth::routes();


Route::get('/english', 'HomeController@english')->name('english');

Route::get('/', function () {
   return redirect()->route('welcome');
});

Route::get('/welcome', 'HomeController@welcome')->name('welcome');


