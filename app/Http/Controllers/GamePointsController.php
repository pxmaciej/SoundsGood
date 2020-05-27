<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Leaderboard;
use Illuminate\Support\Facades\Auth;

class GamePointsController extends Controller
{
  
   public function index($song_id, $current_track, $points, $wrong, $temp){
    

        if($song_id == $current_track){
                $points += 1;
             
            }else{
                $wrong +=1;
               
            }    
    
           

    if($wrong >= 3){
      $upoints = collect(Leaderboard::where('id_user', [Auth::user()->id])->get('points'))->implode('points');

 

        if($upoints == null){
            Leaderboard::LeaderSave($points);
            
        }elseif($points > $upoints){
            Leaderboard::where('id_user',Auth::user()->id)->update(["points" => $points]);
        }
    }    
        
            

   return redirect()->action('GameController@index', ['points' => $points, 'wrong' => $wrong, 'temp'=>$temp]);
   
   }
}
