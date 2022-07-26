<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $guarded = [];
    public $timestamps = false;

    public function art(){
        return $this->belongsTo('App\Art');
    }
}
