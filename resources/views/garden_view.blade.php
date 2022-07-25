@extends('header')


@section('contents')
    <div class="d-flex justify-content-center align-items-center flex-column w-100" style="height: 900px">
        <img src="{{asset('public/garden/'.$data['garden']['name'].'1.jpg')}}" alt="" style="width: 400px;height: 400px;object-fit: cover;border-radius: 20px;">
        <h2 class="m-2">{{$data['garden']['name']}}</h2>
        <p class="m-0">{{$data['garden']['address']}}</p>
        <p class="m-0">{{$data['garden']['phone']}}</p>
        <p class="m-0">관리기관 : {{$data['garden']['management']}}</p>
        <div class="d-flex">
            <button class="btn btn-outline-info m-1" onclick="location.href='/promise/{{$data['garden']['id']}}'">예약</button>
            <button class="btn btn-outline-info m-1">파노라마</button>
        </div>
    </div>
@endsection
