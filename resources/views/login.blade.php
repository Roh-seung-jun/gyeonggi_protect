@extends('header')


@section('contents')
    <div class="flex-column d-flex justify-content-center align-items-center w-100 h-100">
        <form class="d-flex" method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group">
                <p class="m-0">아이디</p>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
                <p class="m-0">비밀번호</p>
                <input type="text" name="password" class="form-control">
            </div>
            <button class="btn-outline-primary btn" type="submit">로그인</button>
        </form>

    </div>
@endsection
