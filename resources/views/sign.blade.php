@extends('header')


@section('contents')
    <form class="d-flex justify-content-center align-items-center flex-column w-100" style="height: 80vh" method="post" action="{{route('sign')}}">
        @csrf
        <div class="form-group">
            <p class="m-0">아이디</p>
            <input type="text" placeholder="아이디" name="id" class="form-control" required>
        </div>
        <div class="form-group">
            <p class="m-0">비밀번호</p>
            <input type="text" placeholder="비밀번호" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <p class="m-0">이름</p>
            <input type="text" placeholder="이름" class="form-control" name="name" required>
        </div>
        <button class="btn btn-outline-info">회원가입</button>
    </form>
@endsection
