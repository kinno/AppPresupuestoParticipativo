
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistema para el Presupuesto Participativo') }}</title>

    <!-- Scripts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    {{--
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('css/select2-bootstrap4.css') }}" rel="stylesheet" />
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
                                    <li class="nav-item {{ (Route::currentRouteName() == 'registro.index') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('registro.index') }}">Registra tu proyecto
                                            <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Comités Ciudadanos Regionales de Presupuesto Participativo
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item {{ (Route::currentRouteName() == 'aspirantes.registro') ? 'active' : '' }}" href="{{ route('aspirantes.registro') }}">Registro de Aspirantes</a>
                                          <a class="dropdown-item" href="#">Consulta de resultados</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item {{ (Route::currentRouteName() == 'votaciones.index') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('votaciones.index') }}">Votaciones
                                            <span class="sr-only">(current)</span></a>
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
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @yield("scripts")
   
</body>

</html>