<?php

namespace App\Http\Controllers;

use App\Disable;
use App\Garden;
use App\Promise;
use App\Review;
use App\Review_file;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class GardenController extends Controller
{
    public function introducePage(){
        $data = [];
        $data['garden'] = Garden::all();
        return view('introduce',compact(['data']));
    }
    public function viewPage($id){
        $data = [];
        $data['garden'] = Garden::find($id);
        return view('garden_view',compact(['data']));
    }

    public function promisePage($id){
        $data = [];
        $data['id'] = $id;
        return view('promise',compact(['data']));
    }

    public function check(Request $request){
        $check = Disable::where('garden_id',$request['id'])->where('date','>',$request['start_date'])->where('date','<',$request['end_date'])->get();
        if($check->count() !== 0) return 1;
        $first = new DateTime($request['start_date']);
        $second = new DateTime($request['end_date']);
        return [$first->diff($second)];
    }
    public function promise(Request $request){
        $input = $request->only(['garden_id','start_date','end_date','people','price']);
        $input['user_id'] = auth()->user()->id;
        Promise::create($input);
        return redirect('/')->with('msg','정상적으로 일정이 등록되었습니다.');
    }

    public function historyPage(){
        return view('history');
    }

    public function delete($id){
        $item = Promise::find($id);
        $item['state'] = 'cancel';
        $item->update();
        return back()->with('msg','정상적으로 삭제되었습니다');
    }
    public function disable(Request $request){
        $find = Disable::where('date',$request['date'])->where('garden_id',auth()->user()->garden[0]->id)->get();
        if($find->count() === 0){
            Disable::create(['garden_id'=>auth()->user()->garden[0]->id,'date'=>$request['date']]);
        }else{
            $find[0]->delete();
        }
        return back()->with('일정이 수정되었습니다');
    }

}
