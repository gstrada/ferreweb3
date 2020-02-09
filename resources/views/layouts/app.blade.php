<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ferreweb') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <!--Import materialize.css-->
    <!--Import Google Icon Font-->


    <!--Import jQuery Library-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('Font-Awesome/font-awesome.js')}}" crossorigin="anonymous"></script>
</head>
<body>
@csrf
@if(auth()->user())
    <nav class="navbar bg-secondary navbar-dark fixed-top">
        <div>
            <img src="{{asset('images/logoFerre.png')}}" alt="logo" width="50px" height="50px">
            <strong class="navbar-text" style="margin-left: 5px;">
                FERREWEB
            </strong>
        </div>
        <div class="dropdown ">
            <a href="" class="" data-toggle="dropdown"><strong class="navbar-text">{{auth()->user()->name}}</strong></a>
            <div class="dropdown-menu" style="float: right !important;">
                <a class="dropdown-item" href="#">Mi perfil</a>
                <a class="dropdown-item" href="{{route('logout')}}"
                   onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Salir</a>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
            <img src="{{asset('images/defaultUser.png')}}" alt="logo" width="50px" height="50px">
        </div>
    </nav>

@endif
<main>
    @yield('content')
</main>
@stack("custom-scripts")
</body>
</html>
