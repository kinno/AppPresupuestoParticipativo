$(document).ready(function () {
    $("#id_municipio").select2({
        theme: 'bootstrap4',
    });

    $("#btnback").on('click', function () {
        location.reload();
    });
    
    $("#ingresar").click(function (e) { 
         var url  = "/votaciones/valida_curp";
        //var url  = "/votaciones/valida_curpSinFiltro";
       
        $.ajax({
            type: "post",
            url: url,
            data: {'curp':$("#curpinput").val(),'id_municipio':$("#id_municipio").val()},
            dataType: "json",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            beforeSend: function() {
                $('#alert').empty().hide();
                $('#loader').toggle();
            },
            success: function (response) {
                // console.log(response)
                if(response.success){
                   $("#dynamicDiv").html(response.html)
                }else{
                    $("#alert").append('<div id="alert" class="alert alert-danger" role="alert"><i class="bi bi-exclamation-triangle-fill" style="font-size: 1.5rem;"></i> '+response.response+' </div>').show();
                    console.log(response.response)
                }
                $('#loader').toggle();
            }
        });
        // 
    });

    $(".candidatos").click(function() {
        $(".candidatos").each(function(){
            $(this).removeClass('active-candidatos');
        })
        $("#proyectoSeleccionado").val($(this).attr('id'));
        $(this).addClass('active-candidatos');
     });
    
});
