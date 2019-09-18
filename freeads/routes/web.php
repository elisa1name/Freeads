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

// Route::get('annonce/show', 'AnnonceController@show');
// Route::get('/annonce', function () {
//     return view('annonce.index', ['titre' => '']);
// });
// Route::post('annonce/create', 'AnnonceController');
// Route::middleware ('auth', 'verified')->group (function () {
//     Route::resource ('profile', 'ProfileController', [
//         'only' => ['edit', 'update', 'destroy', 'show'],
//         'parameters' => ['profile' => 'user']
//     ]);
// });
