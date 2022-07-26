<?php

namespace App\Http\Controllers;

use App\Build;
use App\Event;
use App\Position;
use App\User;
use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function index(){
        $data = [];
        $data['build'] = Build::all();
        $data['event'] = [];
        $data['calendar'] = Event::where('start_date','<=', date('Y-m-d'))->where('end_date','>=',date('Y-m-d'))->get();

        foreach ($data['calendar'] as $item){
            $check = true;
            foreach($data['event'] as $i){
                if($item['start_date'] === $i['start_date'] && $item['end_date'] === $i['end_date'] && $item['user_id'] === $i['user_id']){
                    $i['position'] .= ','.$item['position'];
                    $check =false;
                }
            }
            if($check){
                array_push($data['event'],$item);
            }

        }

        $data['user'] = User::all();
        return view('build',compact(['data']));
    }

    public function addPage(){
        $data['build'] = Build::all();
        return view('addBuild',compact(['data']));
    }

    public function getBuild(Request $request){
        $arr = Event::all();
        $data = [];
        foreach ($arr as $item){
            if(($request['start_date'] > $item['start_date'] && $request['start_date'] < $item['end_date']) || ($request['end_date'] > $item['start_date'] && $request['end_date'] < $item['end_date']) || ($request['end_date'] > $item['end_date'] && $request['start_date'] < $item['start_date'])){
                array_push($data,$item);
            }
        }
        return $data;
    }


    public function post(Request $request){
        foreach ($request['data'] as $item){
            $input = [
                'user_id' => auth()->user()->id,
                'start_date' => $request['start_date'],
                'end_date' => $request['end_date'],
                'position' => $item['data-type'],
                'build_id' => $item['data-id']
            ];
            Event::create($input);
        }
    }
}
