<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ferreweb') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('datatables/dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <script src="{{asset('datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('sweetAlert2/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('datatables/dataTables.bootstrap4.js')}}"></script>
    <!--Import jQuery Library-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('Font-Awesome/font-awesome.js')}}" crossorigin="anonymous"></script>
</head>
<body>
@csrf
@if(auth()->user())
    <nav class="navbar bg-primary navbar-dark fixed-top" style="box-shadow: 3px 5px 10px #154360; background-color: #154360 !important; ">
        <div>
            <img src="{{asset('images/logoFerre.png')}}" alt="logo" width="50px" height="50px">
            <strong class="navbar-text navbar-custom-text" style="margin-left: 5px;">
                FERREWEB
            </strong>
        </div>
        <div class="dropdown ">
            <a href="" class="" data-toggle="dropdown"><strong
                    class="navbar-text navbar-custom-text">{{auth()->user()->first_name.' '.auth()->user()->last_name}}</strong></a>
            <div class="dropdown-menu" style="float: right !important;">
                <a class="dropdown-item" href="#">Mi perfil</a>
                <a class="dropdown-item" href="{{route('logout')}}"
                   onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Salir</a>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
            <img src="{{asset('images/defaultUser.png')}}" alt="logo" width="50px" height="50px" style="border-radius: 50px">
        </div>
    </nav>
    <div class="container-fluid top-menu-bar" align="center">
        <div class="d-flex justify-content-center">
            <div class="col-top-bar flex-fill">
                <button type="button" class="btn btn-info"><i class="fas fa-user-circle"></i>Usuarios</button>
            </div>
            <div class="col-top-bar flex-fill">
                <button type="button" class="btn btn-info"><i class="fas fa-users"></i>Clientes</button>
            </div>
            <div class="col-top-bar flex-fill">
                <button type="button" class="btn btn-info"><i class="fas fa-user-tie"></i>Proveedores</button>
            </div>
            <div class="col-top-bar flex-fill">
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><i class="fas fa-cubes"></i>Stock <i
                        class="fas fa-angle-down"></i></button>
                <div id="demo" class="collapse" style="max-width: 90% !important; background-color: white; z-index: 999">
{{--                    <div class="d-flex">--}}
                        <div class="flex-fill">
                            <span><a href="{{route('stock.categories')}}">Rubros</a></span>
                        </div>
                        <div class="flex-fill">
                            <span>Artículos</span>
                        </div>
                        <div class="flex-fill">
                            <span>Marcas</span>
                        </div>
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-top-bar flex-fill">
                <button type="button" class="btn btn-info"><i class="fas fa-money-bill-alt"></i>Caja</button>
            </div>
        </div>
    </div>
@endif
<main>
    @yield('content')
</main>
@stack("custom-scripts")
</body>
</html>
