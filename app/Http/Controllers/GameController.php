<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Rennokki\Larafy\Larafy;
use Rennokki\Larafy\LarafySeed;
use View;
use App\Http\Controllers\GamePointsController;
class GameController extends Controller
{
    public function index($points, $wrong){
        $limit = 100;
        $offset = 100;
        $api = new Larafy('00c8ff1427674a0e9d26895bb85ced9b', '59e6f9c975a94daab60ef101c3c52671');
        $api->setMarket('PL')->setLocale('pl_PL');
        try {
            $playlist = $api->getPlaylist('37i9dQZF1DXb57FjYWz00c', $limit, $offset);
        } catch(\Rennokki\Larafy\Exceptions\SpotifyAPIException $e) {
            
            $e->getAPIResponse(); // Get the JSON API response.
        }   
            //collect 3 tracks from API and shuffle
           $tracks = collect($playlist->tracks->items)->filter(function( $item){
               return $item->track->preview_url != null;
           })->shuffle()->take(3);   

           $current_track = $tracks->first(); //correct answer 
           $shuffled = $tracks->shuffle(); 

      return View::make('form',['current_track' => $current_track, 'tracks' => $shuffled, 'points'=>$points, 'wrong' => $wrong]);

    }
}
