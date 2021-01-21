<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\players;

use App\gameplays;

use App\games;

class apiController extends Controller
{
    public function players()  {
    	//logic to get all the players names

    	$players = players::get()->tojson(JSON_PRETTY_PRINT);

    	return response($players, 200);
    }

//1. Return all the games
    function games() {   

    	$games = games::get()->tojson(JSON_PRETTY_PRINT);

    	return response($games, 200);
    }

 // 2. Return all the players, their games and their gameplays (overall and for each game)
    function playersAndGamePlays () {
        $players = players::firstOrfail();
    foreach($players->games as $s){

        dd($s->pivot->players_id);
    }


        $playersAndGamePlays = $players->pivot->games()->gameplaysNofTimes->get()->tojson(JSON_PRETTY_PRINT);


            return response($playersAndGamePlays, 200);
    }

    }


