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
// Route::get('/cards/create', 'CardsController@create')->name('cards.create')->middleware('isAdmin');
// Route::post('/cards/store', 'CardsController@store')->name('cards.store')->middleware('isAdmin');
 Route::post('/cards/edit/{id}', 'CardsController@edit')->name('cards.edit');
Route::put('/cards/update/{id}', 'CardsController@update')->name('cards.update');
// Route::get('/cards/destroy/{id}', 'CardsController@destroy')->name('cards.destroy')->middleware('isAdmin');
Route::get('/cards/catalog/{sort_type}', 'CardsController@catalog')->name('cards.catalog');

Route::resource('/abouts', 'AboutsController');
// Route::get('/abouts/create', 'AboutsController@create')->name('abouts.create')->middleware('isAdmin');
// Route::post('/abouts/store', 'AboutsController@store')->name('abouts.store')->middleware('isAdmin');
Route::post('/abouts/edit/{id}', 'AboutsController@edit')->name('abouts.edit');
// Route::get('/abouts/destroy/{id}', 'AboutsController@destroy')->name('abouts.destroy')->middleware('isAdmin');
 Route::put('/abouts/update/{id}', 'AboutsController@update')->name('abouts.update');

Route::resource('/posts', 'PostsController');
// Route::get('/posts/create', 'PostsController@create')->name('posts.create')->middleware('isAdmin');
// Route::post('/posts/store', 'PostsController@store')->name('posts.store')->middleware('isAdmin');
Route::post('/posts/edit/{id}', 'PostsController@edit')->name('posts.edit');
// Route::get('/posts/destroy/{id}', 'PostsController@destroy')->name('posts.destroy')->middleware('isAdmin');
Route::put('/posts/update/{id}', 'PostsController@update')->name('posts.update');

Route::resource('/links', 'LinksController');
// Route::get('/links/create', 'LinksController@create')->name('links.create')->middleware('isAdmin');
// Route::post('/links/store', 'LinksController@store')->name('links.store')->middleware('isAdmin');
Route::post('/links/edit/{id}', 'LinksController@edit')->name('links.edit');
// Route::get('/links/destroy/{id}', 'LinksController@destroy')->name('abouts.links')->middleware('isAdmin');
 Route::put('/links/update/{id}', 'LinksController@update')->name('links.update');


Route::resource('/articles', 'ArticlesController');
// Route::get('/articles/create', 'ArticlesController@create')->name('articles.create')->middleware('isAdmin');
// Route::post('/articles/store', 'ArticlesController@store')->name('articles.store')->middleware('isAdmin');
Route::post('/articles/edit/{id}', 'ArticlesController@edit')->name('articles.edit');
// Route::get('/articles/destroy/{id}', 'ArticlesController@destroy')->name('articles.destroy')->middleware('isAdmin');
Route::put('/articles/update/{id}', 'ArticlesController@update')->name('articles.update');

Route::resource('/englishs', 'EnglishsController');
Route::get('/englishs/show', 'EnglishsController@show')->name('englishs.show');
// Route::get('/englishs/create', 'EnglishsController@create')->name('englishs.create')->middleware('isAdmin');
// Route::post('/englishs/store', 'EnglishsController@store')->name('englishs.store')->middleware('isAdmin');
Route::post('/englishs/edit/{id}', 'EnglishsController@edit')->name('englishs.edit');
// Route::get('/englishs/destroy/{id}', 'EnglishsController@destroy')->name('englishs.destroy')->middleware('isAdmin');
Route::put('/englishs/update/{id}', 'EnglishsController@update')->name('englishs.update');

Auth::routes();



Route::get('/english', 'HomeController@english')->name('english');

Route::get('/', function () {
   return redirect()->route('welcome');
});

Route::get('/welcome', 'HomeController@welcome')->name('welcome');


