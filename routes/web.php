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

/* esempio di utilizzo delle query params per far ritornare pagine dinamiche
 Route::get('/users/{id}/{name}', function ($id, $name) {
     return 'this is user '.$name.' with an id '.$id;});
*/
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashBoardController@index')->name('dashboard');

Auth::routes();

Route::get('/dashboard', 'DashBoardController@index')->name('dashboard');
