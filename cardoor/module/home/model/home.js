$(document).ready(function () {

    //1r combo
    $.get("module/home/controller/controller_home.php?op=dropdown", function (data, status) {
        var tipo = JSON.parse(data);
        var $comboTipos = $("#cboTipos");
        $comboTipos.empty();
        $comboTipos.append("<option>Seleccione un tipo</option>");
        $.each(tipo, function(index, coches) {
            $comboTipos.append("<option>" + coches.tipo + "</option>");
        });
    });
    
    // 2n combo
    $("#cboTipos").change(function() {
        var tipo = $(this).val();
        $.get("module/home/controller/controller_home.php?op=dropdown2&tipo=" + tipo, function(data, status) {
            var gamas = JSON.parse(data);
            var $comboGamas = $("#cboGamas");
            $comboGamas.empty();
            $.each(gamas, function(index, coches) {
                $comboGamas.append("<option>" + coches.gama + "</option>");
            });
        });
        // /autocomplete
        $('#service').keyup(function(){
            var gama = document.getElementById('cboGamas').value;
            var service = $(this).val();
            var dataString = {service: service};
            $.ajax({
                type: "POST",
                url: "module/home/controller/controller_home.php?op=autocomplete&tipo=" + tipo + '&gama=' + gama,
                data: dataString,
                success: function(data) {
                    $('#suggestions').fadeIn(1000).html(data);

                    $('.suggest-element').on('click', function(){
                        var id = $(this).attr('id');
                        $('#service').val($('#'+id).attr('data'));
                        var marca = document.getElementById(id).text;
                        document.getElementById("service").value = marca;
                    });

                    $('#send').on('click', function(){
                        console.log("tevuic");
                        var id = $(this).attr('id');
                        $('#service').val($('#'+id).attr('data'));
                        $('#suggestions').fadeOut(1000);
                        var marca = document.getElementById("service").value;
                        window.location.href = 'index.php?page=controller_home&op=red&tipo=' + tipo + '&gama=' + gama + '&marca=' + marca;
                    });
                }
            });
        });
    });

    // $('.matricula').click(function () {
    //     var id = this.getAttribute('id');
    //     // document.getElementById("details_cars").style.visibility = "visible";
    //      // alert(id);

    //     $.get("module/home/controller/controller_home.php?op=read_modal&modal=" + id, function (data, status) {
    //         var json = JSON.parse(data);
    //         console.log(json);

    //         if(json === 'error') {
    //             //console.log(json);
    //             //pintar 503
    //             window.location.href='index.php?page=503';
    //         }else{
    //             console.log(json.matricula);
    //             $("#matricula").html(json.matricula);
    //             $("#tipo").html(json.tipo);
    //             $("#marca").html(json.marca);
    //             $("#modelo").html(json.modelo);
    //             $("#fabricante").html(json.fabricante);
    //             $("#combus").html(json.combus);
    //             $("#extra").html(json.extra);
    //             $("#color").html(json.color);
    //             $("#puertas").html(json.puertas);
    //             $("#caballos").html(json.caballos);
    //             $("#marchas").html(json.marchas);
    //             $("#velocidad").html(json.velocidad);
    //             $("#motor").html(json.motor);
    //             $("#date_fabric").html(json.date_fabric);
    //             $("#precio").html(json.precio);

    //             $("#details_cars").show();
    //             $("#cars_modal").dialog({
    //                 width: 850, //<!-- ------------- ancho de la ventana -->
    //                 height: 500, //<!--  ------------- altura de la ventana -->
    //                 // show: "scale", //<!-- ----------- animación de la ventana al aparecer -->
    //                 // hide: "scale", //<!-- ----------- animación al cerrar la ventana -->
    //                 resizable: "false", //<!-- ------ fija o redimensionable si ponemos este valor a "true" -->
    //                 // position: "down", //<!--  ------ posicion de la ventana en la pantalla (left, top, right...) -->
    //                 modal: "true", //<!-- ------------ si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
    //                 buttons: {
    //                     Ok: function () {
    //                         $(this).dialog("close");
    //                     }
    //                 },
    //                 // show: {
    //                 //     effect: "blind",
    //                 //     duration: 1000
    //                 // },
    //                 // hide: {
    //                 //     effect: "explode",
    //                 //     duration: 1000
    //                 // }
    //             });
    //         }//end-else
    //     });
    // });
});