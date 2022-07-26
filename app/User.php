<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    public $guarded = [];
    public $timestamps = false;
    public $keyType = 'string';

    public function carts(){
        return $this->hasMany('App\Cart');
    }

    public function history(){
        return $this->hasMany('App\History');
    }
}
