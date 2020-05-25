<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Leaderboard;
use Illuminate\Support\Facades\Auth;

class GamePointsController extends Controller
{
   public function index($song_id, $current_track, $points, $wrong){
       
    
    if($wrong <2){
      
        if($song_id == $current_track){
                $points += 1;
            }else{
                $wrong +=1;
            }   
    }else{
        $upoints = Leaderboard::where('id_user', Auth::user()->id)->find('points');
      
        if($upoints < $points || $upoints == null){
           $newpoints = new Leaderboard;
            $newpoints->id_user = Auth::user()->id;
            $newpoints->name = Auth::user()->name;
            $newpoints->points = $points;
            $newpoints->save();
            
        }
    }    
        
            

   return redirect()->action('GameController@index', ['points' => $points, 'wrong' => $wrong]);
   }
}
