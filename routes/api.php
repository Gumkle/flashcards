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

Route::get('flashcards', 'Api\FlashcardController@index')->name('flashcards.index');
Route::get('flashcards\{flashcard`}', 'Api\FlashcardController@show')->name('flashcards.show');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    Route::post('flashcards', 'Api\FlashcardController@store')->name('flashcards.store');
    Route::post('flashcards\{flashcard}', 'Api\FlashcardController@update')->name('flashcards.update');
    Route::delete('flashcards\{flashcard}', 'Api\FlashcardController@delete')->name('flashcards.delete');
});
