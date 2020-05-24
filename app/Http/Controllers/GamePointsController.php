<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class GamePointsController extends Controller
{
   public function index($song_id, $current_track, $points, $wrong){
       
    
    
        if($song_id == $current_track){
                $points += 1;
            }else{
                $wrong +=1;
            }   
    
  

   return redirect()->action('GameController@index', ['points' => $points, 'wrong' => $wrong]);
   }
}
