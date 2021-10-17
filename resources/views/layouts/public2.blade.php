<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
</head>

<body>
    <div id="app" style="background-color: #FFFFFF">
        <!-- HEADER -->
        {{-- <nav class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-2 col-md-1 mr-0" href="#">
                <img src="{{ asset('images/logos/h1.png') }}" alt="">
            </a>
            <h1>Sistema de Presupuesto Participativo del Estado de México</h1>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Sign out</a>
                </li>
            </ul>
        </nav> --}}
        <header>
            <div class="container">
                <div class="row header-container">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img src="{{ asset('images/logos/h1.png') }}" alt="" class="logo-header">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 encabezado-text linea">
                        <div class="navbar navbar-default ">
                            <div class="container-fluid bordetop">

                                <div id="menuencabezado">
                                    <div class="header-text">
                                        <h1 class="">Secretaría de Finanzas</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container leyenda">
                <div class="row header-container">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
                        Sistema para el Presupuesto Participativo
                    </div>
                </div>
            </div>
        </header>

        <!-- MENU -->
        <topmenu>
            <div class="container">
                <div class="row header-container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Conoce tu municipio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Registro</a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                </div>
            </div>
        </topmenu>
 
        <!-- Main content -->
        <main role="main">
            <div class="container">
                <div class="row ">
                    @yield('content')
                </div>
            </div>
        </main>
        
    </div>
</body>

</html>
