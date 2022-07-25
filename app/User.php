<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $guarded = [];
    public $timestamps = false;
    protected $keyType = 'string';

    public function promise(){
        return $this->hasMany('App\Promise');
    }

    public function garden(){
        return $this->hasMany('App\Garden');
    }
}
