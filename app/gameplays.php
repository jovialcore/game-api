<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gameplays extends Model
{
    protected  $fillable = [

    			'players_id',
    			'games_id',
    			'gameplaysNofTimes'
    ];
}
