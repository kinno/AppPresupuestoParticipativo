
@extends('layouts.public')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Conoce tu municipio</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Elige tu municipio</h5>
                    
                   <select name="municipios_id" id="municipios" class="form-control">
                       @foreach ($municipios as $key => $municipio)
                       <option value="{{ $municipio }}" title="{{ $municipio->region }}">{{  $municipio->descripcion}}</option>
                       @endforeach
                       
                   </select>
                    
                                           
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div id="map"  style="width: 100%; height: 650px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("scripts")
<script type="text/javascript">
    // 
    $(document).ready(function () {
        var map = new L.Map("map", {center: [19.354167, -99.630833], zoom: 9});

            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=”http://osm.org/copyright”>OpenStreetMap</a> contributors'
                }).addTo(map);

            $.getJSON("https://gaia.inegi.org.mx/wscatgeo/geo/mgee/15", function(data){
                L.geoJSON(data).addTo(map);
            });

            function getDataMunicipio(municipio){
                console.log(municipio)
            }

            $("#municipios").select2().on('select2:select', function (e) {
                var data = e.params.data;
                 data = $.parseJSON(data.id);
                console.log(data);
            });
            
    });
    
</script>
@endsection
