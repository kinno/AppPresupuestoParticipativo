$(function () {
    if($(".is-invalid").toArray().length>0){
        $(".dynamic-container").each(function(index){
            $(this).toggle();
        })
    } 
    
    $("#verifyCURP").click(function (e) { 
        var url  = "/registra_tu_proyecto/buscarCURP";
        // var url  = "/registra_tu_proyecto/buscarCURPSinFiltro";
        $.ajax({
            type: "post",
            url: url,
            data: {'curp':$("#curpinput").val()},
            dataType: "json",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            beforeSend: function() {
                $('#alert').empty().hide();
                $('#loader').toggle();
            },
            success: function (response) {
                // console.log(response)
                if(response.success){
                    if(response.encontrado){
                        window.location.assign('/registra_tu_proyecto/resultado?id=' + response.id_proyecto_pp);
                    }else{
                        $(".dynamic-container").each(function(index){
                                $(this).fadeToggle("slow");
                            })
                            console.log(response);
                        $("#auto_id_nombre").val(response.nombre);    
                        $("#auto_id_edad").val(response.edad);    
                        $("input[name=sexo][value="+response.sexo+"]").attr('checked',true);    
                        $("#auto_id_curp").val($("#curpinput").val());    
                    }
                }else{
                    $("#alert").append('<i class="bi bi-exclamation-triangle-fill" style="font-size: 1.5rem;"></i> '+response.response).show();
                    console.log(response.response)
                }
                $('#loader').toggle();
            }
        });
        // 
    });

    $("#auto_id_id_municipio").on('change', function () {
        $("#auto_id_region").val($("#auto_id_id_municipio option:selected").attr('region'))
    });

    $('input:radio[name="bintegrante"]').on('change', function () {
        if ($(this).val() == 1) {
            $("#auto_id_integrante_pc").prop('readonly', false);
        } else {
            $("#auto_id_integrante_pc").prop('readonly', true).val("");
        }
    });

    $('input:radio[name="borganizacion"]').on('change', function () {
        if ($(this).val() == 1) {
            $("#auto_id_organizacion_social").prop('readonly', false);
        } else {
            $("#auto_id_organizacion_social").prop('readonly', true).val("");
        }
    });

    $("#auto_id_id_rubro").on('change', function () {
        if ($("#auto_id_id_rubro option:selected").val() == "-1") {
            $("#auto_id_id_tipo_proyecto option").remove();
        } else {
            var proyectos = $("#auto_id_id_rubro option:selected").attr("proyectos");
            var p = JSON.parse(proyectos);
            $("#auto_id_id_tipo_proyecto option").remove();
            $.each(p, function (i, item) {
                $("#auto_id_id_tipo_proyecto").append('<option value="' + item.id + '">' + item.descripcion + '</option>')
            })
        }
    });

    $("#auto_id_id_municipio").select2({
        theme: 'bootstrap4',
    });

    var map = new L.Map("map", { center: [19.354167, -99.630833], zoom: 9, zoomDelta: 1 });

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href=”http://osm.org/copyright”>OpenStreetMap</a> contributors',
        opacity: 1,

    }).addTo(map);

    var markers = null;
    map.on('click', function(e) {
        (markers == null) ? "" : map.removeLayer(markers);
        markers = new L.FeatureGroup();
       var marker = L.marker([e.latlng.lat,e.latlng.lng],{
            draggable : true,
        });
        markers.addLayer(marker);
        
        map.addLayer(markers);
        $("#latlng").val(e.latlng.lat+","+e.latlng.lng);
    });

    $('#accordion').on('shown.bs.collapse', function (e) {
        map.invalidateSize(true);
    })

    

});
