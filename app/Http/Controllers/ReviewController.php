<?php

namespace App\Http\Controllers;

use App\Review;
use App\Review_file;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function review(Request $request,$id){
        $input = $request->only(['contents','score']);
        $input['user_id'] = auth()->user()->id;
        $input['promise_id'] = $id;
        $review = Review::create($input);
        foreach ($request->file as $item){
            $data = [];
            $data['file_name'] = time().'_'.basename($item).'.'.$item->extension();
            $item->move(base_path('public/review'),$data['file_name']);
            $data['review_id'] = $review['id'];
            Review_file::create($data);
        }
        return back()->with('msg','정상적으로 등록되었습니다.');
    }
}
