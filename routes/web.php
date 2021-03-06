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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/**
 * Example Role Middleware
 */
Route::get('/admin', function () {
    return 'admin';
})->middleware('role:admin');

Route::get('/user', function () {
    return 'user';
})->middleware('role:user');