@extends('layouts.public')

@section('content')
<div class="container-fluid mt-4">
    <form action="{{ route('registro.send') }}" method="post" id="formRegistro" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <h4 class="text-center ">
                    Solicitud de registro para aspirantes de Comités Ciudadanos Regionales de Presupuesto Participativo
                </h4>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header" id="headingOne">
                <h4 class="mb-2 p-2 text-center ">
                    Datos personales
                </h4>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                    <x-form-input name="nombre" label="Nombre: "></x-form-input>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                    <x-form-input type="number" min="1" name="edad" label="Edad: "></x-form-input>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                    <x-form-input type="date" min="1" name="fecha_nacimiento" label="Fecha de Nacimiento: "></x-form-input>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <x-form-input name="nacionalidad" label="Nacionalidad: "></x-form-input>
                                </div>
                                <div class="col">
                                    <x-form-input name="curp" label="CURP: "></x-form-input>
                                </div>
                                <div class="col">
                                    <x-form-input name="lugar_nacimiento" label="Lugar de nacimiento: "></x-form-input>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <x-form-select name="id_municipio"
                                                label="Municipio:"
                                               >
                                                <option value="">Seleccione...</option>
                                                @foreach ($municipios as $key => $municipio)
                                                <option value="{{ $municipio->id }}" region="{{ $municipio->region->cve_region }} {{ $municipio->region->nom_region }}">{{
                                                    $municipio->nom_municipio}}</option>
                                                @endforeach
                                    </x-form-select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <x-form-input name="tiempo_residencia" label="Tiempo de residencia en el municipio:"></x-form-input>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <x-form-input name="domicilio_residencia" label="Domicilio de residencia:"></x-form-input>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col">
                                    <x-form-input type="tel" name="telefono" label="Teléfono: "></x-form-input>
                                </div>
                                <div class="col">
                                    <x-form-input type="tel" name="celular" label="Celular: "></x-form-input>
                                </div>
                                <div class="col">
                                    <x-form-input name="email" label="Correo Electrónico: "></x-form-input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header" id="headingOne">
                <h4 class="mb-2 p-2 text-center ">
                    Experiencia en el ámbito laboral
                </h4>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <x-form-group inline class="pr-2 mx-auto" name="actual_funcionario"
                                                label="¿Actualmente es funcionario(a) o servidor(a) público(a) de algún gobierno u organismo
                                                autónomo (federal, estatal o municipal)?">
                                                <x-form-radio name="actual_funcionario" value=true label="Si" />
                                                <x-form-radio name="actual_funcionario" value=false label="No" checked/>
                                    </x-form-group>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <x-form-input name="ocupacion" label="Ocupación actual: "></x-form-input>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <x-form-input name="grado_estudios" label="Grado máximo de estudios: "></x-form-input>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">¿Actualmente pertenece a alguna Organización de la Sociedad Civil, fundación o asociación social sin fines de lucro constituida legalmente?</h5>
                                            <p class="card-text">
                                            <div class="form-row">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <x-form-group name="basociacion" label="">
                                                        <x-form-radio name="basociacion" value="1" label="Si" />
                                                        <x-form-radio name="basociacion" value="0" label="No"
                                                            checked />
                                                    </x-form-group>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                                    <x-form-input name="nombre_asociacion" label="Nombre de la asociación:" readonly></x-form-input>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                                    <x-form-input name="objecto_asociacion" label="Objeto de la asociación:" readonly></x-form-input>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">¿Actualmente pertenece algun movimiento, colectivo o agrupación social?</h5>
                                            <p class="card-text">
                                                <div class="form-row">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <x-form-group name="bcolectivo" label="">
                                                            <x-form-radio name="bcolectivo" value="1" label="Si" />
                                                            <x-form-radio name="bcolectivo" value="0" label="No"
                                                                checked />
                                                        </x-form-group>
                                                    </div>
                                                    <div class="col-md-10 col-lg-10 col-xl-10">
                                                        <x-form-input name="colectivo_social" label="¿Cuál?" readonly>
                                                            </x-form-input>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">¿Actualmente desempeña alguna actividad dentro de algún partido político o forma parte de algun cuerpo directivo de estos?</h5>
                                            <p class="card-text">
                                                <div class="form-row">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <x-form-group name="actividad_politica" label="">
                                                            <x-form-radio name="actividad_politica" value="1" label="Si" />
                                                            <x-form-radio name="actividad_politica" value="0" label="No"
                                                                checked />
                                                        </x-form-group>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">¿Ha desempeñado alguna actividad o cargo con representación de un partido político?</h5>
                                            <p class="card-text">
                                                <div class="form-row">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <x-form-group name="cargo_politico" label="">
                                                            <x-form-radio name="cargo_politico" value="1" label="Si" />
                                                            <x-form-radio name="cargo_politico" value="0" label="No"
                                                                checked />
                                                        </x-form-group>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">¿Cuenta con experiencia en la implementación de proyectos comunitarios y actividades sociales?</h5>
                                            <p class="card-text">
                                                <div class="form-row">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <x-form-group name="experiencia_proyectos" label="">
                                                            <x-form-radio name="experiencia_proyectos" value="1" label="Si" />
                                                            <x-form-radio name="experiencia_proyectos" value="0" label="No"
                                                                checked />
                                                        </x-form-group>
                                                    </div>
                                                    <div class="col-md-10 col-lg-10 col-xl-10">
                                                        <x-form-input name="anos_experiencia" label="Años de experiencia:" readonly>
                                                        </x-form-input>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Describa brevemente los logros más relevantes obtenidos en la actividad social desempeñada:</h5>
                                            <p class="card-text">
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <x-form-textarea name="descripcion_logros">
                                                        </x-form-textarea>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header" id="headingOne">
                <h4 class="mb-2 p-2 text-center ">
                   Carga de documentación
                </h4>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Carta de exposición de motivos donde se exprese el interés por participar</h5>
                                            <p class="card-text">
                                            <div class="form-row">
                                                <div class="col12">
                                                    <x-form-input type="file" name="file_carta_motivos" label="Carta de exposición de motivos:" accept="image/*">
                                                        @slot('help')
                                                        <small class="form-text text-muted">
                                                            Nota: el archivo de imagen no debe pesar más de 2 MB
                                                        </small>
                                                        @endslot
                                                    </x-form-input>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Ficha curricular y semblanza profesional</h5>
                                            <p class="card-text">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <x-form-input type="file" name="file_ficha_curricular" label="Ficha curricular:" accept="image/*">
                                                        @slot('help')
                                                        <small class="form-text text-muted">
                                                            Nota: el archivo de imagen no debe pesar más de 2 MB
                                                        </small>
                                                        @endslot
                                                    </x-form-input>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Carta de recomendación de actores sociales</h5>
                                            <p class="card-text">
                                            <div class="form-row">
                                                <div class="col12">
                                                    <x-form-input type="file" name="file_carta_recom1" label="Carta de recomendación:" accept="image/*">
                                                        @slot('help')
                                                        <small class="form-text text-muted">
                                                            Nota: el archivo de imagen no debe pesar más de 2 MB
                                                        </small>
                                                        @endslot
                                                    </x-form-input>
                                                </div>
                                                <div class="col12">
                                                    <x-form-input type="file" name="file_carta_recom2" label="Carta de recomendación:" accept="image/*">
                                                        @slot('help')
                                                        <small class="form-text text-muted">
                                                            Nota: el archivo de imagen no debe pesar más de 2 MB
                                                        </small>
                                                        @endslot
                                                    </x-form-input>
                                                </div>
                                                <div class="col12">
                                                    <x-form-input type="file" name="file_carta_recom3" label="Carta de recomendación:" accept="image/*">
                                                        @slot('help')
                                                        <small class="form-text text-muted">
                                                            Nota: el archivo de imagen no debe pesar más de 2 MB
                                                        </small>
                                                        @endslot
                                                    </x-form-input>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Carta de manifestación bajo protesta de decir la verdad</h5>
                                            <p class="card-text">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <x-form-input type="file" name="file_carta_manifestacion" label="Carta de manifestación:" accept="image/*">
                                                        @slot('help')
                                                        <small class="form-text text-muted">
                                                            Nota: el archivo de imagen no debe pesar más de 2 MB
                                                        </small>
                                                        @endslot
                                                    </x-form-input>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Carta de manifestación bajo protesta de decir la verdad</h5>
                                            <p class="card-text">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <x-form-input type="file" name="file_carta_manifestacion" label="Carta de manifestación:" accept="image/*">
                                                        @slot('help')
                                                        <small class="form-text text-muted">
                                                            Nota: el archivo de imagen no debe pesar más de 2 MB
                                                        </small>
                                                        @endslot
                                                    </x-form-input>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row mt-4 pb-5">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-5 offset-lg-4 col-xl-5 offset-xl-4">
                <x-form-submit class="btn-lg btn-block btn-success">
                    <i class="bi-clipboard-check" ></i> Guardar registro
                </x-form-submit>
            </div>
        </div>
    </form>
</div>
@endsection
@section('scripts')
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<script src="{{ asset('js/registro/registro.js') }}">
</script>
@endsection