<?php

namespace App\Http\Controllers;

use App\Art;
use App\Buy;
use App\Cart;
use App\History;
use App\User;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class ArtController extends Controller
{
    public function index(){
        $data = Art::all();
        return view('art_list',compact(['data']));
    }

    public function view($id){
        $data = Art::find($id);
        return view('art_view',compact(['data']));
    }

    //구매
    public function buy(Request $request){
        if($request['type'] === 'single'){
            $input = [];
            $input['user_id'] = auth()->user()->id;
            $input['art_id'] = $request['data'];
            $input['code'] = $this->random();
            History::create($input);
            return redirect('/');
        }else{
            $code = $this->random();
            foreach ($request['arr'] as $item){
                History::create([
                    'user_id' => auth()->user()->id,
                    'art_id' => Cart::find($item)->art->id,
                    'code' => $code
                ]);
                Cart::find($item)->delete();
            }
            return redirect('cart');
        }
    }

    //장바구니
    public function history($id){
        Cart::create(['art_id'=>$id,'user_id'=>auth()->user()->id]);
        return redirect('/');
    }

    //랜덤값 출력
    protected function random()
    {
        $array = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P','Q','R','S','T','U','0','1','2','3','4','5','6','7','8','9');
        $total = count($array) - 1;
        $answer = '';
        for ($i = 1; $i <= 4 ; $i++) {
            $random = mt_rand(0, $total);
            $answer .= $array[$random];
            array_splice($array, array_search($array[$random], $array), 1);
            --$total;
        }
        return $answer;
    }

    public function cartPage(){
        $data = [];
        $data['cart'] = User::find(auth()->user()->id)->carts;
        $data['history'] = User::find(auth()->user()->id)->history;
        return view('cart',compact(['data']));
    }

    public function art_create(){
        return view('create');
    }

    public function create(Request $request){
        $input = $request->only(['name','type','art_name','description','price']);
        $input['code'] = 'KO-'.$this->random();
        $input['product_img'] = time().''.$request->file('product_img')->getClientOriginalName();
        $request['product_img']->move('public/data/image/'.$request['type'], $input['product_img']);
        Art::create($input);
        return redirect('/');
    }

    public function art_search(){
        $data = [];
        $data['art'] = Art::all();
        return view('art_search',compact(['data']));
    }

    public function getData(Request $request){
        $data = false;
        if($request['type'] === 'all' && is_null($request['search'])){
            $data = Art::all();
        }else if($request['type'] !== 'all' && is_Null($request['search'])){
            $data1 = Art::where('type',$request['type'])->get();
            $data2 = Art::where('type','<>',$request['type'])->get();
        }else if($request['type'] === 'all' && !is_null($request['search'])){
            $data = [];
            $arr = Art::all();
            $text = explode('+',$request['search']);
            foreach ($arr as $item){
                $check = $this->textCheck($item['art_name'],$text);
                if($check) {
                    array_push($data, $item);
                }
            }
        }else{
            $arr = Art::all();
            $text = explode('+',$request['search']);
            $data1 = [];
            $data2 = [];
            foreach ($arr as $item){
                $check = $this->textCheck($item['art_name'],$text);
                if($check) {
                    if($item['type'] === $request['type'])
                        array_push($data1, $item);
                    else
                        array_push($data2, $item);

                }
            }
        }
        if(!$data) return [$data1,$data2];
        return [$data];
    }


    protected function textCheck($text,$search){
        $check = true;
        foreach ($search as $item){
            if (strpos($text, $item) === false) {
                $check = false;
            }
        }
        return $check;
    }


    public function delete($id){
        Art::find($id)->delete();
        return back();
    }

    public function modal(Request $request){
        return Art::find($request['id']);
    }

    public function modify(Request $request){
        $index = Art::find($request['id']);
        $input = $request->only(['type',
        'name',
        'art_name',
        'price',
        'description']);
        if($request['product_img']){
            $input['product_img'] = time().$request['product_img']->getClientOriginalName();
            $request['product_img']->move('public/data/image/'.$request['type'],$input['product_img']);
        }
        $index->update($input);
        return back();
    }
}
