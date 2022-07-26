@extends('header')


@section('contents')
    <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img src="{{asset('public/data/image/'.$data['type'].'/'.$data['product_img'])}}" alt="" class="mr-5" style="width: 500px;height: 500px">
        <div class="">
            <h1>{{$data['art_name']}}</h1>
            <p>작가 : {{$data['name']}}</p>
            <p>작품 설명 : {{$data['description']}}</p>
            <p>{{$data['price']}}원</p>
            <button class="btn btn-outline-success" onclick="location.href='{{route('buy',['type'=>'single','data' => $data['id']])}}'">구매하기</button>
            <button class="btn btn-outline-success" onclick="location.href='{{route('history',$data['id'])}}'">장바구니 담기</button>
        </div>
    </div>
@endsection
