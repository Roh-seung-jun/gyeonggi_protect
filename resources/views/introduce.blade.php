@extends('header')


@section('contents')
    <div class="d-flex justify-content-center w-100">
        <button class="btn btn-outline-info m-2">리뷰</button>
        <button class="btn btn-outline-info m-2">예약</button>
        <button class="btn btn-outline-info m-2">별점</button>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-wrap w-100">
        @foreach($data['garden'] as $idx => $item)
            <div class="box w-25 m-3 d-flex align-items-center flex-column" onclick="location.href='{{route('view',$item['id'])}}'">
                    <img src="{{asset('public/garden/'.$item['name'].'1.jpg')}}" alt="" style="width: 200px;height: 200px;object-fit: cover;border-radius: 20px;">
                <h3>{{$item['name']}}</h3>
            </div>
        @endforeach
    </div>
@endsection
