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

Route::get('/', 'IndexController@showIndex');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('annonce', 'AnnonceController');
Route::get('annonce/show/{id}', 'AnnonceController@show');
Route::middleware ('auth', 'verified')->group (function () {
    Route::resource ('profile', 'ProfileController', [
        'except' => ['create'],
        'parameters' => ['profile' => 'user']
    ]);
});
Route::get('conversation', 'ConversationController@index')->name('conversation');
// Route::get('conversation/{id}', 'ConversationController@show')->name('conversation.show');
