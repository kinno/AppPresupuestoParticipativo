@extends('layouts.public')

@section('content')
<div class="container-fluid mt-4">
    <form action="{{ route('registro.send') }}" method="post" id="formRegistro" enctype="multipart/form-data">
        @csrf
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Paso 1: Ingresa tus datos
                        </button>
                    </h5>
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
                                        <x-form-group name="sexo" label="Sexo">
                                            <x-form-radio name="sexo" value="M" label="Femenino" checked/>
                                            <x-form-radio name="sexo" value="H" label="Masculino" />
                                        </x-form-group>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <x-form-input name="curp" label="CURP: "></x-form-input>
                                    </div>
                                    <div class="col">
                                        <x-form-input name="correo" label="Correo Electrónico: "></x-form-input>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <x-form-input type="tel" name="telefono" label="Teléfono: "></x-form-input>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <x-form-textarea name="domicilio_notificaciones"
                                            label="Domicilio para recibir notificaciones: ">
                                        </x-form-textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                                <x-form-select name="id_municipio"
                                                    label="Municipio donde se propone el proyecto:"
                                                   >
                                                    <option value="">Seleccione...</option>
                                                    @foreach ($municipios as $key => $municipio)
                                                    <option value="{{ $municipio->id }}" region="{{ $municipio->region->cve_region }} {{ $municipio->region->nom_region }}">{{
                                                        $municipio->nom_municipio}}</option>
                                                    @endforeach
                                                </x-form-select>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                                <x-form-input name="region" label="Región:" readonly></x-form-input>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <x-form-group inline class="pr-2" name="reside_municipio"
                                                    label="¿Reside en el municipio de la propuesta?">
                                                    <x-form-radio name="reside_municipio" value="S" label="Si" checked />
                                                    <x-form-radio name="reside_municipio" value="N" label="No" />
                                                </x-form-group>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">¿Es participante de algún organo de Participación
                                                    Ciudadana?</h5>
                                                <p class="card-text">
                                                <div class="form-row">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <x-form-group name="bintegrante" label="">
                                                            <x-form-radio name="bintegrante" value="1" label="Si" />
                                                            <x-form-radio name="bintegrante" value="0" label="No"
                                                                checked />
                                                        </x-form-group>
                                                    </div>
                                                    <div class="col-md-10 col-lg-10 col-xl-10">
                                                        <x-form-textarea name="integrante_pc" label="¿Cuál?" readonly>
                                                            </x-form-input>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">¿Forma parte de alguna organización o colectivo
                                                    social?
                                                </h5>
                                                <p class="card-text">
                                                <div class="form-row">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <x-form-group name="borganizacion" label="">
                                                            <x-form-radio name="borganizacion" value="1" label="Si" />
                                                            <x-form-radio name="borganizacion" value="0" label="No"
                                                                checked />
                                                        </x-form-group>
                                                    </div>
                                                    <div class="col-md-10 col-lg-10 col-xl-10">
                                                        <x-form-textarea name="organizacion_social" label="¿Cuál?"
                                                            readonly>
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
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Paso 2: Ingresa los datos de tu propuesta
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-row">
                                    <h6 class="card-subtitle pb-3 text-muted">
                                        Consulta <a href="">aquí</a> la Guía Ciudadana para la Formulación de Proyectos
                                        Sociales para participar en el Ejercicio 2021 del Presupuesto Participativo del
                                        Estado de México, en la cual encontraras los pasos y la información necesaria
                                        que te ayude a llenar los siguientes campos.
                                    </h6>
                                </div>
                                <div class="form-row">
                                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                        <x-form-textarea name="nombre_proyecto" label="Nombre del proyecto" rows="4">
                                            @slot('help')
                                            <small class="form-text text-muted">
                                                (En un máximo de 200 caracteres, enuncie el nombre descriptivo del
                                                proyecto)
                                            </small>
                                            @endslot
                                        </x-form-textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                        <div class="form-row">
                                            <div class="col">
                                                <x-form-select name="id_rubro"
                                                    label="Rubro de inversión pública:">
                                                    <option value="-1">Seleccione...</option>
                                                    @foreach ($rubros as $key => $rubros)
                                                    <option value="{{ $rubros->id }}" proyectos="{{ $rubros->proyectos }}">{{
                                                        $rubros->descripcion}}</option>
                                                    @endforeach
                                                </x-form-select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <x-form-select name="id_tipo_proyecto" label="Tipo de proyecto:">
                                                    <option value="">Seleccione...</option>
                                                </x-form-select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <x-form-textarea name="impacto"
                                            label="Describa de forma clara y precisa el impacto del Proyecto">
                                            @slot('help')
                                            <small class="form-text text-muted">
                                                (En un máximo de 500 caracteres, describa la situación actual y el
                                                impacto municipal y regional, así como su impacto a corto y largo plazo)
                                            </small>
                                            @endslot
                                        </x-form-textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12">
                                        <x-form-textarea name="componentes"
                                            label="Describa de forma clara y precisa los componentes del Proyecto">
                                            @slot('help')
                                            <small class="form-text text-muted">
                                                (En un máximo de 500 caracteres, mencione los elementos y requerimientos
                                                necesarios para ejecutar el proyecto)
                                            </small>
                                            @endslot
                                        </x-form-textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <h4>Indica el lugar de tu propuesta:</h4>
                                        <div id="map" style="width: 100%; height: 550px;"></div>
                                        <x-form-input type="text" id="latlng" name="latlng" ></x-form-input>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <x-form-input name="domicilio" label="Ubicación del proyecto:">
                                            @slot('help')
                                            <small class="form-text text-muted">
                                                (Entre que calle, referencia que permita ubicarlas)
                                            </small>
                                            @endslot
                                        </x-form-input>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12">
                                        <x-form-input type="file" name="img_predio" label="Imagen del predio:" accept="image/*">
                                            @slot('help')
                                            <small class="form-text text-muted">
                                                (Imagen del predio donse se realizará el proyecto) Nota: el archivo de imagen no debe pesar más de 2 MB
                                            </small>
                                            @endslot
                                        </x-form-input>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                        <div class="form-row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                <x-form-input name="costo" label="Costo estimado:">
                                                    @slot('help')
                                                    <small class="form-text text-muted">
                                                        (Se recomienda que los proyectos no superen los 5 millones de
                                                        pesos para su consideración)
                                                    </small>
                                                    @endslot
                                                </x-form-input>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                <x-form-input name="poblacion_beneficiada"
                                                    label="Cantidad de problación beneficiada:"></x-form-input>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                <x-form-input name="tiempo_ejecucion" label="Tiempo de ejecución:">
                                                </x-form-input>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                <x-form-input name="vida_util" label="Vida útil del proyecto:">
                                                </x-form-input>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <x-form-group name="poblacion_beneficiada_esp"
                                            label="Población beneficiada específica:">
                                            <x-form-checkbox name="poblacion_beneficiada_esp[]" :show-errors="false"
                                                value="TODA LA POBLACIÓN" label="Toda la población" />
                                            <x-form-checkbox name="poblacion_beneficiada_esp[]" :show-errors="false"
                                                value="PERSONAS CON DISCAPACIDAD" label="Personas con discapacidad" />
                                            <x-form-checkbox name="poblacion_beneficiada_esp[]" :show-errors="false"
                                                value="NIÑAS/OS" label="Niñas/os" />
                                            <x-form-checkbox name="poblacion_beneficiada_esp[]" :show-errors="false"
                                                value="ADULTOS MAYORES" label="Adultos mayores" />
                                            <x-form-checkbox name="poblacion_beneficiada_esp[]" :show-errors="false"
                                                value="JÓVENES" label="Jóvenes" />
                                            <x-form-checkbox name="poblacion_beneficiada_esp[]" :show-errors="false"
                                                value="MUJERES" label="Mujeres" />
                                        </x-form-group>
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
                    <i class="bi-clipboard-check" ></i> Registra tu proyecto
                </x-form-submit>
            </div>
        </div>
    </form>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/registro/registro.js') }}">
</script>
@endsection