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
    Route::get('repositories/create', 'RepositoryController@create')->name('repositories.create');
    Route::post('repositories', 'RepositoryController@store')->name('repositories.store');
    Route::get('repositories/{repository}/edit', 'RepositoryController@edit')->name('repositories.edit');
    Route::post('repositories/{repository}', 'RepositoryController@update')->name('repositories.update');
    Route::delete('repositories', 'RepositoryController@delete')->name('repositories.delete');
});

Route::middleware('auth')->group(function() {
    Route::get('users/current', 'UserController@showCurrentUser')->name('users.current');
    Route::resource('users', 'UserController');
});
Route::get('repositories', 'RepositoryController@index')->name('repositories.index');
Route::get('repositories/{repository}', 'RepositoryController@show')->name('repositories.show');
Route::get('repositories/{repository}/solve', 'RepositoryController@solve')->name('repositories.solve');
Route::post('repositories/{repository}/solve', 'RepositoryController@submit')->name('repositories.submit');

Route::post('translate/{lang}}', 'TranslationController@translate')->name('translator.translate');
Auth::routes(['verify' => true]);