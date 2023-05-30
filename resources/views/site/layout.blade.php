<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" content="text/css">
    <link href="{{asset('css/font/bootstrap.scss')}}" rel="stylesheet" content="text/css">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" content="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.theme.css')}}">
</head>
<body>

    {{--conteudo --}}
    @yield('content')

    <script src="{{asset('js/caroussel.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
