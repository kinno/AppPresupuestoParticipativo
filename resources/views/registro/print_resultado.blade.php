<html>
    <head>
        <title>Proyecto folio {{ $proyecto->id }}</title>
        <style>
            /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            @page {
                margin: 0.5cm 0cm;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 5cm;
                margin-left: 4cm;
                margin-right: 4cm;
                margin-bottom: 2cm;
                background-color: white !important;
            }

            /** Define the header rules **/
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 4cm;
            }

            /** Define the footer rules **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 4cm;
            }
        </style>
        <link href="{{ public_path('css/app.css') }}" rel="stylesheet">
        <link href="{{ public_path('css/custom.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <img src={{ public_path('images/logos/headerRegistro.png') }} width="100%" height="100%"/>
        </header>

        <footer>
            <img src={{ public_path('images/logos/footerRegistro.png') }} width="100%" height="100%"/>
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <div class="container">
                <div class="col-md-10 offset-md-1" style="margin-top: 20%">
                        <p class="h2 text-center mb-5">Gracias por registrar tu proyecto de Presupuesto Participativo Edoméx 2022 </p>
                        <p class="h5 mb-2 text-center"><span class="bold">Folio de participación: {{ $proyecto->id }}</span></p>
                        <p class="h5 mb-2"><span class="bold">Nombre de la propuesta: </span>"{{ $proyecto->nombre_proyecto }}"</p>
                        <p class="h5 mb-2"><span class="bold">Región y Municipio: </span>{{ $proyecto->municipio->region->cve_region }} {{ $proyecto->municipio->region->nom_region }} - {{ $proyecto->municipio->nom_municipio }}</p>
                        <p class="h5 mb-2"><span class="bold">Fecha y hora de registro: </span>{{ $proyecto->created_at->formatLocalized('%d de %B de %Y ,%H:%M %p horas.') }}</p>
                </div>
                <div class="col-md-10 offset-md-1" style="margin-top: 25%">
                        <p class="h6 text-right">www.presupuestoparticipativo.edomex.gob.mx</p>
                        <p class="h6 text-right">presupuesto.participativo@edomex.gob.mx</p>
                </div>
            </div>
        </main>
    </body>
</html>

