<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\players;

use App\games;

class apiController extends Controller
{
    public function players()  {
    	//logic to get all the players names

    	$players = players::get()->tojson(JSON_PRETTY_PRINT);

    	return response($players, 200);
    }


    function games() {
    	// return all the games and their respective players

    	$games = games::get()->tojson(JSON_PRETTY_PRINT);

    	return response($games, 200);
    }

}
