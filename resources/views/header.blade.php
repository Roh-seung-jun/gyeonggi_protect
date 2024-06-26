<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('./public/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('./public/bootstrap-4.3.1-dist/js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('./public/bootstrap-4.3.1-dist/css/bootstrap.css')}}">
    @yield('script')
    @yield('style')
</head>
<body style="height: 100vh">
@yield('contents')
</body>
</html>
