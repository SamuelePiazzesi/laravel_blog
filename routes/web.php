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

// esempio di utilizzo delle query params per far ritornare pagine dinamice

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'this is user '.$name.' with an id '.$id;
});

Route::get('/about', function () {
    return view('pages.about');
});