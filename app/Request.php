<?php

namespace App;

use Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Request extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date','rmno','college','equipment',
        'propertynuber','quantity','service',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
            'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   

    /**
     * Automatically creates the hash for the user's password.
     *
     * @param  string  $value
     * @return void
     */
 
}
/* 1.0 SA SE!!!!! */
