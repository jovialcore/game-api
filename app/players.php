<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class players extends Model
{

        protected $fillable = [
        'name', 'email', 'password', 'nickName', 'lastLogin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}