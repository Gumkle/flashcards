<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('flashcards', 'Api\FlashcardsController@index')->name('flashcards.index');
Route::get('flashcards\{flashcard`}', 'Api\FlashcardsController@show')->name('flashcards.show');

Route::middleware('auth:api')->get('/user', function (Request $request) {

});
