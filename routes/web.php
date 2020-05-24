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

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/game/{points}/{wrong}', 'GameController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/points/{song_id}/{current_track}/{points}/{wrong}', 'GamePointsController@index');
