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
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route; 

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('lang/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
Route::get('/game/{points}/{wrong}/{temp}', 'GameController@index')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/points/{song_id}/{current_track}/{points}/{wrong}/{temp}', 'GamePointsController@index')->middleware('auth');
Route::get('/leaderboard','LeaderBoardController@index');
