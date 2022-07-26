<?php

namespace App\Http\Controllers;

use App\Garden;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticePage(){
        $data = [];
        $data['garden'] = Garden::all();
        $data['notice'] = Notice::all();
        return view('notice',compact(['data']));
    }
}
