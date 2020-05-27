<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    public static function LeaderSave($points){
        $newpoints = new Leaderboard;
        $newpoints->id_user = Auth::user()->id;
        $newpoints->name = Auth::user()->name;
        $newpoints->points = $points;
        $newpoints->save();
    }
}
