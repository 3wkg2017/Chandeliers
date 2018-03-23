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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/cards', 'CardsController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('/english', 'HomeController@english')->name('english');
Route::post('/cards/store', 'CardsController@store')->name('cards.store');
Route::post('/cards/create', 'CardsController@index')->name('cards.create');
Route::put('/cards/{id}', 'CardsController@update')->name('cards.update');
Route::get('/cards/{id}', 'CardsController@show')->name('cards.show');
Route::get('/cards/{sort_type}', 'CardsController@catalog')->name('cards.catalog');

Auth::routes();

Route::resource('/abouts', 'AboutsController');
Route::get('/abouts/create', 'AboutsController@create')->name('abouts.create')->middleware('isAdmin');
Route::post('/abouts/store', 'AboutsController@store')->name('abouts.store')->middleware('isAdmin');
Route::post('/abouts/edit', 'AboutsController@edit')->name('abouts.edit')->middleware('isAdmin');
Route::put('/abouts/update/{id}', 'AboutsController@update')->name('abouts.update')->middleware('isAdmin');



Route::resource('/posts', 'PostsController');
Route::get('/posts/create', 'PostsController@create')->name('posts.create')->middleware('isAdmin');
Route::post('/posts/store', 'PostsController@store')->name('posts.store')->middleware('isAdmin');
Route::post('/posts/edit', 'PostsController@edit')->name('posts.edit')->middleware('isAdmin');
Route::put('/posts/update/{id}', 'PostsController@update')->name('posts.update')->middleware('isAdmin');

