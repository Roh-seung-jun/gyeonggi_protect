@extends('header')


@section('contents')
    <div class="justify-content-center flex-column align-items-center d-flex w-100" style="height: 900px">
        <h4>각 정원의 소식지</h4>---
        <div class="d-flex w-50 h-25 flex-wrap">
        @foreach($data['garden'] as $item)
            <button class="btn btn-outline-success m-1">{{$item['name']}}</button>
        @endforeach
        </div>
    </div>

@endsection
