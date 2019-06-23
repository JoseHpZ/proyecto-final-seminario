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
    return view('index');
})->name('index');

Route::get('/gallery', 'MealController@index')->name('gallery');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::group(['prefix' => 'auth'], function () {

    Auth::routes();

});