<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proyectos</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/sitio.js')}}"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
            <h1>REGISTRO DE PROPUESTA DE PROYECTO PARA CONSULTA CIUDADANA DEL PROGRAMA PRESUPUESTO PARTICIPATIVO 2022</h1>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">
        </div>
    </div>

</div>
@if($errors->any())
<div class="modal fade" id="errores" tabindex="-1" aria-labelledby="errores" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="erroresLabel">Validación de Campos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
        $(document).ready(function () {
    var myModal = new bootstrap.Modal(document.getElementById('errores'));
    myModal.toggle();

});
    </script>
        @endif
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-bottom:40px;"></div>
    </div>
        <form name="registro" action="{{url('registrar')}}" method="post" enctype="multipart/form-data"  >
        @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><h4>Datos de la Persona Ciudadana</h4></div>
            </div>
            <div class="mb-3 row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"><label for="nombre" class="col-sm-1 col-form-label">Nombre</label></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" maxlength="100"></div>
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"><label for="edad" class="col-sm-1 col-form-label" >Edad</label></div>
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"><input type="number" class="form-control" id="edad" name="edad" min="18" value="{{old('edad')}}"></div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
            </div>
            <div class="mb-3 row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"><label for="curp" class="col-sm-1 col-form-label">CURP</label></div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"><input type="text" class="form-control" id="curp" name="curp" value="{{old('curp')}}"></div>
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"><label for="correo" >Correo electrónico</label></div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"><input type="email" class="form-control" id="correo" name="correo" value="{{old('correo')}}"></div>
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"><label for="sexo" >Sexo</label></div>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2"><input type="radio" name="sexo" value="H" {{ old('sexo')=='H' ? 'checked' : '' }}> H &nbsp;<input type="radio" name="sexo" value="M" {{ old('sexo')=='M' ? 'checked' : '' }}> M</div>
            </div>
            <div class="mb-3 row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"><label for="telefono" class="col-sm-1 col-form-label">Teléfono</label></div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"><input type="tel" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}" maxlength="10"></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>Domicilio para recibir notificaciones</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <textarea class="form-control" id="domicilio" name="domicilio" rows="3">{{old('domicilio')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>Municipio Región donde se propone el Proyecto </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <select class="form-select" name="municipio" id="municipio">
                                <option value="">Selecciona Municipio</option>
                                <option value="Acambay">Acambay de Ruíz Castañeda</option>
                                <option value="Acolman">Acolman</option>
                                <option value="Aculco">Aculco</option>
                                <option value="Almoloya de Alquisiras">Almoloya de Alquisiras</option>
                                <option value="Almoloya de Juárez">Almoloya de Juárez</option>
                                <option value="Almoloya del Río">Almoloya del Río</option>
                                <option value="Amanalco">Amanalco</option>
                                <option value="Amatepec">Amatepec</option>
                                <option value="Amecameca">Amecameca</option>
                                <option value="Apaxco">Apaxco</option>
                                <option value="Atenco">Atenco</option>
                                <option value="Atizapán">Atizapán</option>
                                <option value="Atizapán de Zaragoza">Atizapán de Zaragoza</option>
                                <option value="Atlacomulco">Atlacomulco</option>
                                <option value="Atlautla">Atlautla</option>
                                <option value="Axapusco">Axapusco</option>
                                <option value="Ayapango">Ayapango</option>
                                <option value="Calimaya">Calimaya</option>
                                <option value="Capulhuac">Capulhuac</option>
                                <option value="Chalco">Chalco</option>
                                <option value="Chapa de Mota">Chapa de Mota</option>
                                <option value="Chapultepec">Chapultepec</option>
                                <option value="Chiautla">Chiautla</option>
                                <option value="Chicoloapan">Chicoloapan</option>
                                <option value="Chiconcuac">Chiconcuac</option>
                                <option value="Chimalhuacán">Chimalhuacán</option>
                                <option value="Coacalco">Coacalco</option>
                                <option value="Coatepec Harinas">Coatepec Harinas</option>
                                <option value="Cocotitlán">Cocotitlán</option>
                                <option value="Coyotepec">Coyotepec</option>
                                <option value="Cuautitlán">Cuautitlán</option>
                                <option value="Cuautitlán Izcalli">Cuautitlán Izcalli</option>
                                <option value="Donato Guerra">Donato Guerra</option>
                                <option value="Ecatepec de Morelos">Ecatepec de Morelos</option>
                                <option value="Ecatzingo">Ecatzingo</option>
                                <option value="El Oro">El Oro</option>
                                <option value="Huehuetoca">Huehuetoca</option>
                                <option value="Hueypoxtla">Hueypoxtla</option>
                                <option value="Huixquilucan">Huixquilucan</option>
                                <option value="Isidro Fabela">Isidro Fabela</option>
                                <option value="Ixtapaluca">Ixtapaluca</option>
                                <option value="Ixtapan de la Sal">Ixtapan de la Sal</option>
                                <option value="Ixtapan del Oro">Ixtapan del Oro</option>
                                <option value="Ixtlahuaca">Ixtlahuaca</option>
                                <option value="Jaltenco">Jaltenco</option>
                                <option value="Jilotepec">Jilotepec</option>
                                <option value="Jilotzingo">Jilotzingo</option>
                                <option value="Jiquipilco">Jiquipilco</option>
                                <option value="Jocotitlán">Jocotitlán</option>
                                <option value="Joquicingo">Joquicingo</option>
                                <option value="Juchitepec">Juchitepec</option>
                                <option value="La Paz">La Paz</option>
                                <option value="Lerma">Lerma</option>
                                <option value="Luvianos">Luvianos</option>
                                <option value="Malinalco">Malinalco</option>
                                <option value="Melchor Ocampo">Melchor Ocampo</option>
                                <option value="Metepec">Metepec</option>
                                <option value="Mexicaltzingo">Mexicaltzingo</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Naucalpan de Juárez">Naucalpan de Juárez</option>
                                <option value="Nextlalpan">Nextlalpan</option>
                                <option value="Nezahualcóyotl">Nezahualcóyotl</option>
                                <option value="Nicolás Romero">Nicolás Romero</option>
                                <option value="Nopaltepec">Nopaltepec</option>
                                <option value="Ocoyoacac">Ocoyoacac</option>
                                <option value="Ocuilan">Ocuilan</option>
                                <option value="Otumba">Otumba</option>
                                <option value="Otzoloapan">Otzoloapan</option>
                                <option value="Otzolotepec">Otzolotepec</option>
                                <option value="Ozumba">Ozumba</option>
                                <option value="Papalotla">Papalotla</option>
                                <option value="Polotitlán">Polotitlán</option>
                                <option value="Rayón">Rayón</option>
                                <option value="San Antonio la Isla">San Antonio la Isla</option>
                                <option value="San Felipe del Progreso">San Felipe del Progreso</option>
                                <option value="San Martín de las Pirámides">San Martín de las Pirámides</option>
                                <option value="San Mateo Atenco">San Mateo Atenco</option>
                                <option value="San Simón de Guerrero">San Simón de Guerrero</option>
                                <option value="San José del Rincón">San José del Rincón</option>
                                <option value="Santo Tomás">Santo Tomás</option>
                                <option value="Soyaniquilpan de Juárez">Soyaniquilpan de Juárez</option>
                                <option value="Sultepec">Sultepec</option>
                                <option value="Tecámac">Tecámac</option>
                                <option value="Tejupilco">Tejupilco</option>
                                <option value="Temamatla">Temamatla</option>
                                <option value="Temascalapa">Temascalapa</option>
                                <option value="Temascalcingo">Temascalcingo</option>
                                <option value="Temascaltepec">Temascaltepec</option>
                                <option value="Temoaya">Temoaya</option>
                                <option value="Tenancingo">Tenancingo</option>
                                <option value="Tenango del Aire">Tenango del Aire</option>
                                <option value="Tenango del Valle">Tenango del Valle</option>
                                <option value="Teoloyucan">Teoloyucan</option>
                                <option value="Teotihuacán">Teotihuacán</option>
                                <option value="Tepetlaoxtoc">Tepetlaoxtoc</option>
                                <option value="Tepetlixpa">Tepetlixpa</option>
                                <option value="Tepotzotlán">Tepotzotlán</option>
                                <option value="Tequixquiac">Tequixquiac</option>
                                <option value="Texcaltitlán">Texcaltitlán</option>
                                <option value="Texcalyacac">Texcalyacac</option>
                                <option value="Texcoco">Texcoco</option>
                                <option value="Tezoyuca">Tezoyuca</option>
                                <option value="Tianguistenco">Tianguistenco</option>
                                <option value="Timilpan">Timilpan</option>
                                <option value="Tlalmanalco">Tlalmanalco</option>
                                <option value="Tlalnepantla de Baz">Tlalnepantla de Baz</option>
                                <option value="Tlatlaya">Tlatlaya</option>
                                <option value="Toluca">Toluca</option>
                                <option value="Tonanitla">Tonanitla</option>
                                <option value="Tonatico">Tonatico</option>
                                <option value="Tultepec">Tultepec</option>
                                <option value="Tultitlán">Tultitlán</option>
                                <option value="Valle de Bravo">Valle de Bravo</option>
                                <option value="Valle de Chalco Solidaridad">Valle de Chalco Solidaridad</option>
                                <option value="Villa del Carbón">Villa del Carbón</option>
                                <option value="Villa Guerrero">Villa Guerrero</option>
                                <option value="Villa Victoria">Villa Victoria</option>
                                <option value="Villa de Allende">Villa de Allende</option>
                                <option value="Xalatlaco">Xalatlaco</option>
                                <option value="Xonacatlán">Xonacatlán</option>
                                <option value="Zacazonapan">Zacazonapan</option>
                                <option value="Zacualpan">Zacualpan</option>
                                <option value="Zinacantepec">Zinacantepec</option>
                                <option value="Zumpahuacán">Zumpahuacán</option>
                                <option value="Zumpango">Zumpango</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <div class="mb-3 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>¿Es integrante de algún órgano de Participación Ciudadana?</h4>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ecentrado">
                            <input type="radio" name="integrante" value="No" {{ old('integrante')=='No' ? 'checked' : '' }}> No &nbsp;<input type="radio" name="integrante" value="Si" {{ old('integrante')=='Si' ? 'checked' : '' }} > Si
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 ">
                            <label for="cual1" class="col-sm-1 col-form-label" >¿Cuál?</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                            <input type="text" class="form-control" id="cual1" name="cual1" value="{{old('cual1')}}" disabled {{ old('cual1')!='' ? 'enabled' : '' }} maxlength="100">
                    </div>
                    </div>  
                   
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <div class="mb-3 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>¿Forma parte de alguna organización o colectivo social?</h4>
                        </div>
                    </div>
                 <div class="mb-3 row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ecentrado">
                            <input type="radio" name="parte" value="No" {{ old('parte')=='No' ? 'checked' : '' }}> No &nbsp;<input type="radio" name="parte" value="Si" {{ old('parte')=='Si' ? 'checked' : '' }}> Si
                     </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 ">
                            <label for="cual2" class="col-sm-1 col-form-label" >¿Cuál?</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                            <input type="text" class="form-control" id="cual2" name="cual2" value="{{old('cual2')}}" disabled maxlength="100">
                        </div>
                    </div>  
                   
                </div>
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <div class="mb-3 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                         <h4>¿Reside en el municipio de la propuesta?</h4>
                     </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ecentrado">
                            <input type="radio" name="reside" value="No" {{ old('reside')=='No' ? 'checked' : '' }}> No &nbsp;<input type="radio" name="reside" value="Si" {{ old('reside')=='Si' ? 'checked' : '' }}> Si
                        </div>
                 </div>                   
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><h4>Datos del Proyecto</h4></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><p>Consulta <a href="">aquí</a> la Guía Ciudadana para la Formulación de Proyectos Sociales para participar en el Ejercicio 2021 del Presupuesto Participativo del Estado de México, en la cual encontraras los pasos y la información necesaria que te ayude a llenar los siguientes campos.</p></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>Nombre del Proyecto</h4>
                            <p>(En un máximo de 200 caracteres, enuncie el nombre descriptivo del proyecto)</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <textarea class="form-control" id="nomproyecto" name="nomproyecto" rows="3" >{{old('nomproyecto')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>Rubro de inversión pública</h4>
                            <select class="form-select" name="categoria" id="categoria">
                                <option value="Agua">Agua</option>
                                <option value="Comunicaciones y transportes">Comunicaciones y transportes</option>
                                <option value="Electricidad">Electricidad</option>
                                <option value="Turismo">Turismo</option>
                                <option value="Educación">Educación</option>
                                <option value="Ciencia y Tecnología">Ciencia y Tecnología</option>
                                <option value="Cultura">Cultura</option>
                                <option value="Deporte">Deporte</option>
                                <option value="Salud y Asistencia Social">Salud y Asistencia Social</option>
                            </select>
                        </div>
                    </div>
                   <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>Tipo de Proyecto</h4>
                            <select class="form-select" name="subcategoria" id="subcategoria">
                                <option value="Construcción de Pozos y cárcamos de bombeo">Construcción de Pozos y cárcamos de bombeo</option>
                                <option value="Estaciones públicas de agua potable">Estaciones públicas de agua potable</option>
                                <option value="Embalses naturales o artificiales">Embalses naturales o artificiales</option>
                                <option value="Construcción y rehabilitación de Sistemas de Riego">Construcción y rehabilitación de Sistemas de Riego</option>
                                <option value="Modelos para la captación de aguas pluviales para campo o ciudad">Modelos para la captación de aguas pluviales para campo o ciudad</option>
                            </select>
                       </div>
                   </div>
               </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4>Describa de forma clara y precisa el impacto del Proyecto</h4>
                    <h6>(En un máximo de 500 caracteres, describa la situación actual y el impacto municipal y regional, así como su impacto a corto y largo plazo)</h6>
                </div>
            </div>
            <div class="mb-3 row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <textarea class="form-control" id="impacto" name="impacto" rows="3">{{old('impacto')}}</textarea>
                    </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4>Describa de forma clara y precisa los componentes del Proyecto</h4>
                    <h6>(En un máximo de 500 caracteres, describa la situación actual y el impacto municipal y regional, así como su impacto a corto y largo plazo)</h6>
                </div>
            </div>
            <div class="mb-3 row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <textarea class="form-control" id="componentes" name="componentes" rows="3">{{old('componentes')}}</textarea>
                    </div>
            </div>
            <div class="mb-3 row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4>Elabore un croquis del lugar de su propuesta</h4>
                    <h6>señale las calles aledañas y el punto exacto donde se desarrollaría el proyecto, así como alguna referencia que felicite la ubicación. Presentar una imagen, fotografía, croquis, etc., del lugar donde se propone el proyecto).</h6>
                </div>
            </div>
            <div class="mb-3 row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 input-group">
                        <label class="input-group-text" for="inputGroupFile01">Archivo</label>
                        <input type="file" class="form-control" id="archivo" name="archivo">
                    </div>
            </div>
            <div class="mb-3 row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4>Imagen del Predio</h4>
                    <h6>Imagen del Predio donde se hara el proyecto</h6>
                </div>
            </div>
            <div class="mb-3 row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 input-group">
                        <label class="input-group-text" for="archivo2">Archivo</label>
                        <input type="file" class="form-control" id="archivo2" name="archivo2">
                    </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>Domicilio del proyecto</h4>
                            <h6>(Entre que calle, referencia que permita ubicarlas)</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <textarea class="form-control" id="ubicacion" name="ubicacion" rows="5">{{old('ubicacion')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <div class="mb-3 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <h5>Costo estimado</h5>
                            <input type="text" class="form-control" id="costo" name="costo" value="{{old('costo')}}">
                            <div class="mensaje">(Se recomienda que los proyectos no superen los  5 millones de pesos para su consideración)</div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <h5>Cantidad de población beneficiada</h5>
                            <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{old('cantidad')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>Población beneficiaria especifica</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="Toda la población" name="poblacion[]">
                                <label class="form-check-label" for="poblacion">
                                  Toda la población
                                </label>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="Personas con Discapacidad" name="poblacion[]">
                                <label class="form-check-label" for="poblacion">
                                   Personas con Discapacidad
                                </label>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="Niñas/os" name="poblacion[]">
                                <label class="form-check-label" for="poblacion">
                                   Niñas/os
                                </label>
                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="Adultos mayores" name="poblacion[]">
                                <label class="form-check-label" for="poblacion">
                                   Adultos mayores
                                </label>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="Jóvenes" name="poblacion[]">
                                <label class="form-check-label" for="poblacion">
                                   Jóvenes
                                </label>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="Mujeres" name="poblacion[]">
                                <label class="form-check-label" for="poblacion">
                                   Mujeres
                                </label>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="mb-3 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>Tiempo de Ejecución</h4>
                            <span class="spancentrado">(En meses)</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" class="form-control" id="ejecucion" name="ejecucion" value="{{old('ejecucion')}}" >
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="mb-3 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h4>Vida útil del proyecto</h4>
                            <div class='spancentrado'>(En meses)</div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" class="form-control" id="util" name="util" value="{{old('util')}}" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 boton">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </form>

</div>
    
</body>
</html>