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

use App\Http\Controllers\LeaderBoardController;
use App\Leaderboard;

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/game/{points}/{wrong}/{temp}', 'GameController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/points/{song_id}/{current_track}/{points}/{wrong}/{temp}', 'GamePointsController@index');
Route::get('/leaderboard','LeaderBoardController@index');
