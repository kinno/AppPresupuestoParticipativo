@extends('layouts.public')
@section('content')

<div class="container-fluid mt-4">
    <div class="dynamic-container" style="display">
        <div class="col-xs-12 col-sm-12 col-md-7 offset-md-2 col-lg-4 offset-lg-2 col-xl-7 offset-xl-2">
            <div class="card text-center mb-5">
                <div class="card-header">
                <h5 class="bold">Gracias por participar en la votación para el Presupuesto Participativo Edoméx 2022</h5>
                </div>
                <div class="card-body">
                    <h4 class="card-title bold">Tu voto ha sido registrado exitosamente!</h4>
                    {{-- <p class="card-text text-left" ><span class="bold">Nombre de tu propuesta: </span>{{ $proyecto->nombre_proyecto }}</p>
                    <p class="card-text text-left"><span class="bold">Región y Municipio dónde se localiza tu propuesta: </span>{{ $proyecto->municipio->region->cve_region }} {{ $proyecto->municipio->region->nom_region }} - {{ $proyecto->municipio->nom_municipio }}</p>
                    <p class="card-text text-left"><span class="bold">Fecha y hora de registro: </span>{{ $proyecto->created_at->formatLocalized('%d de %B de %Y ,%H:%M %p horas.') }}</p>
                    
                    <a href="{{ route('registro.print',['id'=>$proyecto->id]) }}" target="_blank" type="button" id="verifyCURP" class="btn-lg  btn-success mt-3 mb-3">
                        <i class="bi bi-file-earmark-arrow-down" ></i> Descargar folio
                    </a>
                    <h6 class="text-muted text-left">
                        Con este folio podrás darle seguimiento a tu propuesta en la Dirección de Presupuesto Participativo y Datos Abiertos de la Secretaría de Finanzas.
                    </h6> --}}
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
