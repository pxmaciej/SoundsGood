<?php

namespace App\Http\Controllers;

use App\Leaderboard;
use Illuminate\Http\Request;
use View;

class LeaderBoardController extends Controller
{
    public function index(){
        $points = Leaderboard::all();
        return View::make('leaderboard',['list' => $points]);
    }
}
