<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('public/jquery-3.6.0.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/bootstrap-4.4.1/dist/css/bootstrap.css')}}">
    <script src="{{asset('public/bootstrap-4.4.1/dist/js/bootstrap.js')}}"></script>
    @yield('script')
    @yield('style')

    <script>
        @if(session()->has('msg'))
        alert('{{session()->get('msg')}}');
            @endif
    </script>
</head>
<body>
<div class="d-flex justify-content-center align-items-center w-100">
    <button class="btn btn-outline-dark m-1" onclick="location.href='{{route('/')}}'">메인</button>
@if(auth()->user())
        <button class="btn btn-outline-danger m-1" onclick="location.href='{{route('logout')}}'">로그아웃</button>
        <button class="btn btn-outline-primary m-1" onclick="location.href='{{route('history')}}'">예약 내역 페이지</button>
        @else
        <button class="btn btn-outline-secondary m-1" onclick="location.href='{{route('login')}}'">로그인</button>
        <button class="btn btn-outline-info m-1" onclick="location.href='{{route('sign')}}'">회원가입</button>
        @endif
    <button class="btn btn-outline-warning m-1" onclick="location.href='{{route('introduce')}}'">정원 안내페이지</button>
    <button class="btn btn-outline-success" onclick="location.href='{{route('notice')}}'">정원 소식지</button>
</div>
@yield('contents')
</body>
</html>
