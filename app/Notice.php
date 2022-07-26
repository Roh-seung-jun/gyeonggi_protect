<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function garden(){
        return $this->belongsTo('App\Garden');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
