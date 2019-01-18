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

Route::middleware('guest')->group(function () {
    Route::get('/', 'MainPageController@welcome')->name('welcome');
});

Route::middleware('verified')->group(function () {
    Route::resource('messages', 'MessageController');
    Route::resource('users', 'UserController');
});

Route::resource('repositories', 'RepositoryController');
Auth::routes(['verify' => true]);
