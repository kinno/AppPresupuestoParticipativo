@extends('layouts.public')

@section('content')
<div id="dynamicDiv">
    <div class="container-fluid mt-4">
            {{-- <form action="{{ route('votaciones.sendData') }}" method="post" id="formRegistro" enctype="multipart/form-data"> --}}
                @csrf
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center ">
                            Bienvenido a la votación para el Presupuesto Participativo
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card text-center mb-5">
                            <div class="card-header">
                            <h5>Por favor registra tu CURP y tu municipio:</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <x-form-input name="curp" id="curpinput" label="CURP: ">
                                            @slot('prepend')
                                                <span class="bi bi-person-square"></span>
                                            @endslot
                                        </x-form-input>
                                        <div id="alert" class="alert alert-danger" role="alert" style="display:none">
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <x-form-select name="id_municipio" id="id_municipio"
                                            label="Municipio:"
                                            >
                                            <option value="">Seleccione...</option>
                                            @foreach ($municipios as $key => $municipio)
                                            <option value="{{ $municipio->id }}" region="{{ $municipio->region->cve_region }} {{ $municipio->region->nom_region }}">{{
                                                $municipio->nom_municipio}}</option>
                                            @endforeach
                                        </x-form-select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4 col-lg-4 offset-lg-4 col-xl-4 offset-xl-4">
                                        <div id="alert" class="alert alert-danger" role="alert" style="display:none">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4 col-lg-4 offset-lg-4 col-xl-4 offset-xl-4">
                                        <x-form-submit class="btn-lg btn-block btn-success" id="ingresar">
                                            <i class="bi-clipboard-check" ></i> Ingresa a la votación
                                        </x-form-submit>
                                    </div>
                                </div>
                            
                            </div>
                            <div id="loader" class="card-footer text-muted" style="display:none">
                                <div class="d-flex justify-content-center">
                                    <h3>Cargando...</h3>
                                    <div class="spinner-grow text-success" role="status">
                                      <span class="sr-only">Loading...</span>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/votaciones/votaciones.js') }}">
</script>
@endsection