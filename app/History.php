<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public $guarded = [];
    public $timestamps = false;

    public function art(){
        return $this->belongsTo('App\Art');
    }

    public function countInDB($date){
        return History::where('buy_date',$date)->get()->count();
    }

    public function countInCode($code){
        return History::where('code',$code)->get()->count();
    }
}
