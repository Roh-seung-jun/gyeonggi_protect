<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    public $guarded = [];
    public $timestamps = false;
    public function history(){
        return $this->hasMany('App\History');
    }
}
