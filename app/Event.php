<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public $guarded = [];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
