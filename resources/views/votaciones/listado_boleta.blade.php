{{-- @extends('layouts.public')

@section('content') --}}
<div class="container-fluid mt-4">
    <form action="{{ route('votaciones.send') }}" method="post" id="formRegistro" enctype="multipart/form-data">
        @csrf
        {{-- {{ count($proyectos) }} --}}
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="text-center ">
                    Proyectos candidatos para la región: {{ $municipio->region->cve_region }} {{ $municipio->region->nom_region }}
                </h1>
            </div>
        </div>
        @if (count($proyectos)>0)
            <div class="row">
                <div class="col-12">
                    <div class="card text-center">
                        <div class="card-header">
                        <h2>Boleta Digital</h2>
                        </div>
                        <div class="card-body overflow-auto" style="max-height: 450px;">
                        <h5 class="card-title mt-3 pb-3">Selecciona el proyecto por el cuál deseas votar</h5>
                        <p class="card-text" >
                            <div class="row" >
                                @php
                                    $i=0;
                                @endphp
                                @foreach ($proyectos as $proyecto)
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="card candidatos mb-5 rounded-5 border border-dark" id="{{ $proyecto->id }}">
                                            <div class="row no-gutters">
                                                <div class="col-md-4 bg-secondary d-flex align-items-center rounded-5">
                                                    <h1 class="ml-auto mr-auto">#{{ $i }}</h1>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body ">
                                                        <h5 class="card-title">Propuesta de proyecto: </h5>
                                                        <p class="card-text">{{ $proyecto->nombre_proyecto }}</p>
                                                        <p class="card-text"><small class="text-muted">Ubicación: {{ $proyecto->domicilio }}</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </div>
                        </p>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
            <div class="form-row mt-4 pb-5">
                <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-5 offset-lg-4 col-xl-6 offset-xl-3">
                    <x-form-input name="proyecto" id="proyectoSeleccionado" hidden></x-form-input>
                    <x-form-input name="curp" id="curp" value="{{ $curp }}" hidden></x-form-input>
                    <x-form-submit class="btn-lg btn-block btn-success">
                        <i class="bi-clipboard-check" ></i> Guardar registro
                    </x-form-submit>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-12">
                    <div class="card text-center mt-5">
                        <div class="card-header">
                            <h2>No hay proyectos registrados para tu región</h2>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
            <div class="form-row mt-4 pb-5">
                <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-5 offset-lg-4 col-xl-6 offset-xl-3">
                    <button type="button" id="btnback" class="btn btn-success btn-lg btn-block">
                        <i class="bi bi-arrow-counterclockwise"></i> Regresar
                    </button>
                </div>
            </div>
        @endif
        
    </form>
</div>
{{-- @endsection --}}
{{-- @section('scripts') --}}
<script src="{{ asset('js/votaciones/votaciones.js') }}">
</script>
{{-- @endsection  --}}
