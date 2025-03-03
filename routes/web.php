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
    return view('pages.home');
});

Route::get('/contacto', function() {
    return view('pages.contact');
});

Route::get('/efecto-pancho', function() {
    return view('pages.thebook');
});

Route::get('/about-me', function() {
    return view('pages.aboutme');
});

Route::get('/media-blog', function() {
    return view('pages.mediablog');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
