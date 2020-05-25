<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Rennokki\Larafy\Larafy;
use Rennokki\Larafy\LarafySeed;
use View;

class GameController extends Controller
{
    //
       

    public function index($points, $wrong){
       
        
        
        $update='play';
        $limit = 100;
        $offset = 100;
        $api = new Larafy('8e7bdb2251274727bb96bc8100d8a5db', 'c33612abf7e2452d87581511be374880');
        $api->setMarket('PL')->setLocale('pl_PL');
        try {
        // O_25srbGRMuWjM4IAzyTQg
        //5GEf0fJs9xBPr5R4jEQjtw
        //37i9dQZEVXbN6itCcaL3Tt
        //37i9dQZF1DX4UtSsGT1Sbe
            $playlist = $api->getPlaylist('37i9dQZF1DX4UtSsGT1Sbe', $limit, $offset);
          
        } catch(\Rennokki\Larafy\Exceptions\SpotifyAPIException $e) {
            
            $e->getAPIResponse(); // Get the JSON API response.
        }   
    //@dd($playlist);
         

       
     
        
           $tracks = collect($playlist->tracks->items)->filter(function( $item){
               return $item->track->preview_url != null;
           })->shuffle()->take(3); 
        
        //@dd($tracks);

    
      
           
           $current_track = $tracks->first();
           $shuffled = $tracks->shuffle();

           

   
      return View::make('form',['current_track' => $current_track, 'tracks' => $shuffled,'update'=> $update, 'points'=>$points, 'wrong' => $wrong]);
        
        

    }
}
