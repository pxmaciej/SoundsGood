<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Rennokki\Larafy\Larafy;
use Rennokki\Larafy\LarafySeed;
use View;

class GameController extends Controller
{
    //
       

    public function index(int $id){
    
        $update='play';
        $limit = 10;
        $offset = 5;
        $api = new Larafy('8e7bdb2251274727bb96bc8100d8a5db', 'c33612abf7e2452d87581511be374880');
       
        try {
            $playlist = $api->getTrack('7EjyzZcbLxW7PaaLua9Ksb');
        } catch(\Rennokki\Larafy\Exceptions\SpotifyAPIException $e) {
            // invalid data sent
            $e->getAPIResponse(); // Get the JSON API response.
        }
        
        $track = $playlist;
    


  
      

          

        
      return View::make('form',['track' => $track,'update'=> $update]);
        
        

    }
}
