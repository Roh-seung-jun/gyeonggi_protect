<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garden extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function type(){
        return $this->hasMany('App\Type');
    }

    public function promise(){
        return $this->hasMany('App\Promise');
    }

    public function disable(){
        return $this->hasMany('App\Disable');
    }
}
