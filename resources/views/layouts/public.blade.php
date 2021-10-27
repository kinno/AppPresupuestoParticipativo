
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    {{--
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @yield("styles")
</head>

<body>
    <div id="app" style="background-color: #FFFFFF">
        <!-- HEADER -->
        <header>
            <div class="container-fluid">
                <div class="row header-container">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                        <img src="{{ asset('images/logos/h1.png') }}" alt="" class="logo-header">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 encabezado-text">
                        <div id="nombresitio" class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                            <h1>Presupuesto Participativo</h1>
                            <h3>Secretaría de Finanzas</h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- MENU -->
        <topmenu>
            <div class="container-fluid">
                <div class="row pleca"></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-color:#919191;">
                        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #919191">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item {{ (Route::currentRouteName() == 'home') ? 'active' : '' }}" >
                                        <a class="nav-link " href="{{ route('home') }}">
                                            <span class="bi-house-door-fill"></span>
                                            Inicio
                                        </a>
                                    </li>
                                    <li class="nav-item {{ (Route::currentRouteName() == 'municipio.index') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('municipio.index') }}">Conoce tu municipio
                                            <span class="sr-only">(current)</span></a>
                                    </li>
                                   <li class="nav-item">
                                        <a class="nav-link" href="#">Registro</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </topmenu>

        <!-- Main content -->
        <main role="main">
            <div class="container-fluid">
                <div class="row ">
                    @yield('content')
                </div>
            </div>
        </main>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @yield("scripts")
   
</body>

</html>