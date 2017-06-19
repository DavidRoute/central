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

Route::get('/home', function () {
	return "This is Home";
});

Route::get('/another', function () {
	return "Another Route";
});

Route::resource('posts', 'PostController');

Route::get('blogs', 'BlogController');


