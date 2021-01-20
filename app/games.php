<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class games extends Model
{
   protected $fillable = [

   			'name',
   			'version',

   ];


   function players() {
   	return $this->belongsToMany(players::class, 'gameplays');
   }
}
