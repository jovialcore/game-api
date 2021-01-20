<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\players;

class apiController extends Controller
{
    public function players()  {
    	//logic to get all the players names

    	$players = players::get()->tojson(JSON_PRETTY_PRINT);

    	return response($players, 200);
    }

}
