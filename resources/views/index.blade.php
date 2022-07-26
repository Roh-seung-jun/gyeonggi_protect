@extends('header')


@section('contents')
<div class="d-flex justify-content-center align-items-center w-100 h-100">
    @if(!auth()->user())
        <button class="btn btn-outline-primary m-1" onclick="location.href='{{route('login')}}'">로그인</button>
    @else
        <button class="btn btn-outline-primary m-1" onclick="location.href='{{route('logout')}}'">로그아웃</button>
    @endif
    <button class="btn-outline-success btn m-1" onclick="location.href='{{route('art_list')}}'">작품 목록</button>
    <button class="btn btn-outline-danger m-1" onclick="location.href='{{route('cart')}}'">장바구니</button>
    <button class="btn btn-outline-info m-1" onclick="location.href='{{route('art_create')}}'">작품 등록</button>
    <button class="btn btn-outline-secondary m-1" onclick="location.href='{{route('art_search')}}'">작품 관리</button>
    <button class="btn btn-outline-warning m-1" onclick="location.href='{{route('build')}}'">임대 현황</button>
    <button class="btn btn-outline-dark m-1" onclick="location.href='{{route('addBuild')}}'">임대 등록</button>
</div>
@endsection
