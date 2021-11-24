@extends('layouts.public')

@section('styles')
{{--
<link href="{{ asset('css/searchbox.css') }}" rel="stylesheet" /> --}}
@endsection

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <h1>Conoce tu municipio</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="card">
                <div class="card-body content-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="card-title">Elige tu municipio</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <select name="municipios_id" id="municipios" class="form-control">
                                <option value="">Seleccione...</option>
                                @foreach ($municipios as $key => $municipio)
                                <option value="{{ $municipio }}" title="{{ $municipio->id }}">{{
                                    $municipio->nom_municipio}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row" style="display:none" id="descripcionMunicipio">
                        <div class="col-12">
                            <ul id="datosRegion" class="list-group list-group-flush">

                            </ul>
                        </div>
                        <div class="col-12">
                            <center>
                                <a id="archivoMunicipio" target="_blank"
                                    class="card-link bi-file-earmark-pdf-fill text-center">Descargar archivo</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div id="map" style="width: 100%; height: 650px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalAnalisis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="nombreRegionModal"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body container-fluid" id="analisisRegionalContainer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("scripts")
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<script src="{{ asset('js/leaflet.ajax.min.js') }}"></script>
<script src="{{ asset('js/proj4.js') }}"></script>
<script src="{{ asset('js/proj4leaflet.js') }}"></script>
<script type="text/javascript">
    //
$(document).ready(function () {
    // var layerMunicipio = null;
    var layerMarker = null;
    var layersregiones = null;
    var layersmunicipios = null;
    var analisisRegion = null;
    
    var map = new L.Map("map", {center: [19.354167, -99.630833],zoom: 9,zoomDelta:1 });
    map.createPane('labels');
    map.getPane('labels').style.zIndex = 650;
  
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href=”http://osm.org/copyright”>OpenStreetMap</a> contributors',
        opacity: 1,
      
        }).addTo(map);

        //cargamos el layout de los límites del estado de méxico
        proj4.defs('EPSG:3857');
        var geojsonl = $.getJSON('{{ asset('files/geojson/limitedomex.json') }}',function(data){
            L.Proj.geoJson(data,{
                color: 'black',
                fill: false,
            }).addTo(map);
        });
        
        //cargamos el layout de las regiones del estado
        var objregiones = []; 
        proj4.defs('EPSG:3857');
        var geojsonr = $.getJSON('{{ asset('files/geojson/igecemregionalizacion2018a.json') }}',function(data){
            layersregiones = L.Proj.geoJson(data,{
                onEachFeature: function(feature,layer){
                   
                    //asigna estilo a las capas de las regiones
                    switch (layer.feature.properties.num_reg) {
                        case "I":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#238B23",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "II":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#FF5500",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "III":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#FFFFBE",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "IV":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#01FEC5",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "V":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#E23354",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "VI":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#E69800",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "VII":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#FE8180",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "VIII":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#c587f5",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "IX":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#AFB4B0",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "X":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#024CA2",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "XI":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#A801E6",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "XII":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#FFEABD",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "XIII":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#F6B19A",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "XIV":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#71E0FF",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "XV":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#BEEAFE",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "XVI":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#7CC701",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "XVII":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#C5CE01",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "XVIII":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#FDC0BC",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "XIX":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#A2FF73",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                        case "XX":
                                layer.setStyle({
                                    color: "black",
                                    fillColor: "#AD7200",
                                    fillOpacity: 0.8,
                                    weight: 0.5
                                });
                            break;
                    
                        default:
                            break;
                    }

                    //agregamos propiedad para ocultar/mostrar
                   feature.properties.active = false;

                   layer.on({
                       click: zoomToFeature
                   })
                   layer.bindTooltip("Región: <b>"+layer.feature.properties.num_reg+" "+layer.feature.properties.nom_reg+"</b><br><i>(Click para ver el <b>Análisis regional</b>)</i>",{
                       direction: 'right',
                       sticky: true
                   }).openTooltip();
                }
            });         
        });

        //cargamos los municipios del estado 
        var objmunicipíos = [];
        proj4.defs('EPSG:3857');
        var geojsonl = $.getJSON('{{ asset('files/geojson/igecemdivpolmunm2018cg.json') }}',function(data){
        layersmunicipios = L.Proj.geoJson(data,{
                dashArray: "5 5",
                weight: 1,
                color: 'black',
                fillColor: 'white',
                fillOpacity: 0.3,
            });
        });

    function zoomToFeature(e) {
        map.fitBounds(e.target.getBounds());
        showModalRegiones(e);
    }
    
    function showModalRegiones(e){
        //VERIFICAR TLALNEPANTLA DE BAZ




        $("#nombreRegionModal").html("Región: "+e.sourceTarget.feature.properties.num_reg+" "+e.sourceTarget.feature.properties.nom_reg);
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "get",
            url: "/widgets/analisisregional",
            data:{analisisRegion},
            dataType: 'html',
            success: function (response) {
                $("#analisisRegionalContainer").html(response);
                $("#modalAnalisis").modal("show");
            }
        });
    }
        
    // function getDataMunicipio(municipio){
    //     (layerMunicipio==null) ? "" : map.removeLayer(layerMunicipio);
    //     (layerMarker==null) ? "" : map.removeLayer(layerMarker);
    //     console.log(municipio.nom_municipio);
    //     $.getJSON("https://gaia.inegi.org.mx/wscatgeo/geo/mgem/buscar/"+municipio.nom_municipio, function(data){
    //         //console.log(data)
    //         layerMunicipio =  L.geoJSON(data,{
    //             dashArray: "5 5",
    //             weight: 1,
    //             color: 'black',
    //             fillColor: 'white',
    //             fillOpacity: 0.3,
    //             });
    //         layerMunicipio.addTo(map);
            
    //        layerMarker = L.marker(layerMunicipio.getBounds().getCenter())
    //         .bindTooltip("Municipio: <b><br>"+municipio.nom_municipio+".",{
    //                 permanent:true,
    //                 direction:'auto',
    //                 className: 'countryLabel',
    //                 opacity: 0.9
    //             }).openTooltip();
    //         layerMarker.addTo(map);
    //         });
            
    // }

    function buscaRegion(region){
       layersregiones.eachLayer(function(layer){
          // console.log(layer.feature.properties.active,layer.feature.properties.nom_reg.toUpperCase(),region)
           if(layer.feature.properties.active == true){
            layer.feature.properties.active = false;
                map.removeLayer(layer);
           }
           if(layer.feature.properties.nom_reg.toUpperCase() == region){
                layer.feature.properties.active = true;
                map.fitBounds(layer.getBounds()).addLayer(layer);
                
           }
       })
    }

    function buscaMunicipio(municipio){
        (layerMarker==null) ? "" : map.removeLayer(layerMarker);
       layersmunicipios.eachLayer(function(layer){
        //   console.log(layer.feature.properties.active,layer.feature.properties.nom_mun,municipio.nom_municipio)
           if(layer.feature.properties.active == true){
            layer.feature.properties.active = false;
                map.removeLayer(layer);
           }
           if(layer.feature.properties.nom_mun.toUpperCase() == municipio.nom_municipio){
                layer.feature.properties.active = true;
                // map.fitBounds(layer.getBounds()).addLayer(layer);
                map.addLayer(layer);
                layerMarker = L.marker(layer.getBounds().getCenter())
                .bindTooltip("Municipio: <b><br>"+municipio.nom_municipio+".",{
                        permanent:true,
                        direction:'auto',
                        className: 'countryLabel',
                        opacity: 0.9
                    }).openTooltip();
                layerMarker.addTo(map);
                
                
           }
       })
    }

    $("#municipios").select2().on('select2:select', function (e) {
        var data = e.params.data;
        data = $.parseJSON(data.id);
        analisisRegion = $.parseJSON(data.region.analisis);
        // console.log($.parseJSON(data.region.analisis));
       
        buscaRegion(data.region.nom_region);
        buscaMunicipio(data);
        
        // getDataMunicipio(data);
       

        $(".dynamic").remove();
        var datosregionhtml = "<li class='list-group-item dynamic'>Region: "+data.region.cve_region+" "+data.region.nom_region+"</li>";
        $("#datosRegion").append(datosregionhtml);
        var url = '{{ asset('files/igecem/') }}/'+data.nom_municipio+'.pdf';
        $("#archivoMunicipio").attr("href", url);
        $("#descripcionMunicipio").show();
    });

});

</script>
@endsection