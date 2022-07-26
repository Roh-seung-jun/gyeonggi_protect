<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    public $guarded = [];
    public $timestamps = false;
    public function position(){
        return $this->hasMany('App\Position');
    }

    public function todayEvent(){
        return $this->hasMany('App\Event');
    }
}
