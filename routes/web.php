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
    return view('pages/index');
});
Route::get('/index', function () {
    return view('pages/index');
});
Route::get('contact', function () {
    return view('pages/contact');
});
Route::get('/articles', function () {
    return view('pages/articles');
});
Route::get('/follow', function () {
    return view('pages/follow');
});
Route::get('/gallery', function () {
    return view('pages/gallery');
});
Route::get('/today', function () {
    return view('pages/today');
});
Route::get('/tutorials', function () {
    return view('pages/tutorials');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
