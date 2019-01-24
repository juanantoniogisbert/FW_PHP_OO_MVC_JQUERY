function validate_cars() {
    if (document.alta_cars.tipo.value===""){
        document.getElementById('error_tipo').innerHTML = "Tiene que elegir un tipo de coche";
        document.alta_cars.tipo.focus();
        return 0;
    }
    document.getElementById('error_tipo').innerHTML = "";

    if (document.alta_cars.matricula.value===""){
        document.getElementById('error_matricula').innerHTML = "Tiene que escribir la matricula del coche";
        document.alta_cars.matricula.focus();
        return 0;
    }
    document.getElementById('error_matricula').innerHTML = "";

    if (document.alta_cars.marca.value===""){
        document.getElementById('error_marca').innerHTML = "Tiene que escribir la marca del coche";
        document.alta_cars.marca.focus();
        return 0;
    }
    document.getElementById('error_marca').innerHTML = "";

    if (document.alta_cars.modelo.value===""){
        document.getElementById('error_modelo').innerHTML = "Tiene que escribir el modelo del coche";
        document.alta_cars.modelo.focus();
        return 0;
    }
    document.getElementById('error_modelo').innerHTML = "";

    if (document.alta_cars.fabricante.value===""){
        document.getElementById('error_fabricante').innerHTML = "Tiene que escribir el fabricante del coche";
        document.alta_cars.fabricante.focus();
        return 0;
    }
    document.getElementById('error_fabricante').innerHTML = "";

    if (document.alta_cars.matricula.value===""){
        document.getElementById('error_matricula').innerHTML = "Tiene que escribir la matricula";
        document.alta_cars.matricula.focus();
        return 0;
    }
    document.getElementById('error_matricula').innerHTML = "";

    if (document.alta_cars.combus.value===""){
        document.getElementById('error_combus').innerHTML = "Tiene que elegir almenos un tipo de combustible";
        document.alta_cars.combus.focus();
        return 0;
    }
    document.getElementById('error_combus').innerHTML = "";

    if (document.alta_cars.extra.value===""){
        document.getElementById('error_extra').innerHTML = "Tiene que marcar al menos un casilla de extras";
        document.alta_cars.extra.focus();
        return 0;
    }
    
    document.getElementById('error_extra').innerHTML = "";

    if (document.alta_cars.color.value===""){
        document.getElementById('error_color').innerHTML = "Tiene que escribir el Color del coche";
        document.alta_cars.color.focus();
        return 0;
    }
    document.getElementById('error_color').innerHTML = "";

    if (document.alta_cars.puertas.value===""){
        document.getElementById('error_puertas').innerHTML = "Tiene que escribir el Puertas del coche";
        document.alta_cars.puertas.focus();
        return 0;
    }
    document.getElementById('error_puertas').innerHTML = "";

    if (document.alta_cars.caballos.value===""){
        document.getElementById('error_caballos').innerHTML = "Tiene que escribir los Caballos del coche";
        document.alta_cars.caballos.focus();
        return 0;
    }
    document.getElementById('error_caballos').innerHTML = "";

    if (document.alta_cars.marchas.value===""){
        document.getElementById('error_marchas').innerHTML = "Tiene que escribir las marchas del coche";
        document.alta_cars.marchas.focus();
        return 0;
    }
    document.getElementById('error_marchas').innerHTML = "";

    if (document.alta_cars.velocidad.value===""){
        document.getElementById('error_velocidad').innerHTML = "Tiene que escribir la Velocidad del coche";
        document.alta_cars.velocidad.focus();
        return 0;
    }
    document.getElementById('error_velocidad').innerHTML = "";

    if (document.alta_cars.motor.value===""){
        document.getElementById('error_motor').innerHTML = "Tiene que escribir el Motor del coche";
        document.alta_cars.motor.focus();
        return 0;
    }
    document.getElementById('error_motor').innerHTML = "";

    if (document.alta_cars.date_fabric.value===""){
        document.getElementById('error_date_fabric').innerHTML = "Tiene que escribir el Motor del coche";
        document.alta_cars.date_fabric.focus();
        return 0;
    }
    document.getElementById('error_date_fabric').innerHTML = "";

    document.alta_cars.submit();
    document.alta_cars.action="index.php?page=controller_cars&op=create";
}
  
function validate_cars_update() {
    if (document.update_cars.tipo.value===""){
        document.getElementById('error_tipo').innerHTML = "Tiene que elegir un tipo de coche";
        document.update_cars.tipo.focus();
        return 0;
    }
    document.getElementById('error_tipo').innerHTML = "";

    if (document.update_cars.matricula.value===""){
        document.getElementById('error_matricula').innerHTML = "Tiene que escribir la matricula";
        document.update_cars.matricula.focus();
        return 0;
    }
    document.getElementById('error_matricula').innerHTML = "";

    if (document.update_cars.marca.value===""){
        document.getElementById('error_marca').innerHTML = "Tiene que escribir la marca del coche";
        document.update_cars.marca.focus();
        return 0;
    }
    document.getElementById('error_marca').innerHTML = "";

    if (document.update_cars.modelo.value===""){
        document.getElementById('error_modelo').innerHTML = "Tiene que escribir el modelo del coche";
        document.update_cars.modelo.focus();
        return 0;
    }
    document.getElementById('error_modelo').innerHTML = "";

    if (document.update_cars.fabricante.value===""){
        document.getElementById('error_fabricante').innerHTML = "Tiene que escribir el fabricante del coche";
        document.update_cars.fabricante.focus();
        return 0;
    }
    document.getElementById('error_fabricante').innerHTML = "";

    if (document.update_cars.combus.value===""){
        document.getElementById('error_combus').innerHTML = "Tiene que elegir almenos un tipo de combustible";
        document.update_cars.combus.focus();
    return 0;
    }
    document.getElementById('error_combus').innerHTML = "";

    if (document.update_cars.extra.value===""){
        document.getElementById('error_extra').innerHTML = "Tiene que marcar al menos un casilla de extras";
        document.update_cars.extra.focus();
        return 0;
    }
    
    document.getElementById('error_extra').innerHTML = "";
  
    if (document.update_cars.color.value===""){
        document.getElementById('error_color').innerHTML = "Tiene que escribir el Color del coche";
        document.update_cars.color.focus();
        return 0;
    }
    
    document.getElementById('error_color').innerHTML = "";

    if (document.update_cars.puertas.value===""){
        document.getElementById('error_puertas').innerHTML = "Tiene que escribir el Puertas del coche";
        document.update_cars.puertas.focus();
        return 0;
    }
    document.getElementById('error_puertas').innerHTML = "";

    if (document.update_cars.caballos.value===""){
        document.getElementById('error_caballos').innerHTML = "Tiene que escribir los Caballos del coche";
        document.update_cars.caballos.focus();
        return 0;
    }
    document.getElementById('error_caballos').innerHTML = "";

    if (document.update_cars.marchas.value===""){
        document.getElementById('error_marchas').innerHTML = "Tiene que escribir las marchas del coche";
        document.update_cars.marchas.focus();
        return 0;
    }
    document.getElementById('error_marchas').innerHTML = "";

    if (document.update_cars.velocidad.value===""){
        document.getElementById('error_velocidad').innerHTML = "Tiene que escribir la Velocidad del coche";
        document.update_cars.velocidad.focus();
        return 0;
    }
    document.getElementById('error_velocidad').innerHTML = "";

    if (document.update_cars.motor.value===""){
        document.getElementById('error_motor').innerHTML = "Tiene que escribir el Motor del coche";
        document.update_cars.motor.focus();
        return 0;
    }
    document.getElementById('error_motor').innerHTML = "";

    if (document.update_cars.date_fabric.value===""){
        document.getElementById('error_date_fabric').innerHTML = "Tiene que escribir el Motor del coche";
        document.update_cars.date_fabric.focus();
    return 0;
    }
    document.getElementById('error_date_fabric').innerHTML = "";

    document.update_cars.submit();
    document.update_cars.action="index.php?page=controller_cars&op=update";
}
  
$(document).ready(function () {
    $('.matricula').click(function () {
        var id = this.getAttribute('id');
        // document.getElementById("details_cars").style.visibility = "visible";
        // alert(id);
        
        $.get("module/vehicle/controller/controller_cars.php?op=read_modal&modal=" + id, function (data, status) {
            var json = JSON.parse(data);
            console.log(data);
            console.log(json);
            
            if(json === 'error') {
                // console.log(json);
                //pintar 503
                window.location.href='index.php?page=503';
            }else{
                console.log(json.matricula);
                $("#tipo").html(json.tipo);
                $("#matricula").html(json.matricula);
                $("#marca").html(json.marca);
                $("#modelo").html(json.modelo);
                $("#fabricante").html(json.fabricante);
                $("#combus").html(json.combus);
                $("#extra").html(json.extra);
                $("#color").html(json.color);
                $("#puertas").html(json.puertas);
                $("#caballos").html(json.caballos);
                $("#marchas").html(json.marchas);
                $("#velocidad").html(json.velocidad);
                $("#motor").html(json.motor);
                $("#date_fabric").html(json.date_fabric);

                $("#details_cars").show();
                $("#cars_modal").dialog({
                    width: 850, //<!-- ------------- ancho de la ventana -->
                    height: 500, //<!--  ------------- altura de la ventana -->
                    // show: "scale", //<!-- ----------- animación de la ventana al aparecer -->
                    // hide: "scale", //<!-- ----------- animación al cerrar la ventana -->
                    resizable: "false", //<!-- ------ fija o redimensionable si ponemos este valor a "true" -->
                    // position: "down", //<!--  ------ posicion de la ventana en la pantalla (left, top, right...) -->
                    modal: "true", //<!-- ------------ si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
                    buttons: {
                        Ok: function () {
                            $(this).dialog("close");
                        }
                    },
                    // show: {
                    //     effect: "blind",
                    //     duration: 1000
                    // },
                    // hide: {
                    //     effect: "explode",
                    //     duration: 1000
                    // }
                });
            }//end-else
        });
    });
  
    $('.borrar').click(function () {
        var id = this.getAttribute('id');
        // document.getElementById("details_cars").style.visibility = "visible";
        // alert(id);
        $.get("module/vehicle/controller/controller_cars.php?op=delete_modal&modal=" + id, function (data, status) {
            var json = JSON.parse(data);
            console.log(json);
            if(json === 'error') {
                window.location.href='index.php?page=503';
            }else{
                console.log(json.matricula);
                $("#marca").html(json.marca);
                $("#modelo").html(json.modelo);
                $("#delete_cars").show();
                $("#cars_delete").dialog({
                    width: 850, //<!-- ------------- ancho de la ventana -->
                    height: 500, //<!--  ------------- altura de la ventana -->
                    // show: "scale", //<!-- ----------- animación de la ventana al aparecer -->
                    // hide: "scale", //<!-- ----------- animación al cerrar la ventana -->
                    resizable: "false", //<!-- ------ fija o redimensionable si ponemos este valor a "true" -->
                    // position: "down", //<!--  ------ posicion de la ventana en la pantalla (left, top, right...) -->
                    modal: "true", //<!-- ------------ si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
                    buttons: {
                        Ok: function () {
                            $(this).dialog("close");
                        }
                    },
                    // show: {
                    //     effect: "blind",
                    //     duration: 1000
                    // },
                    // hide: {
                    //     effect: "explode",
                    //     duration: 1000
                    // }
                });
            }//end-else
        });
    });
});
  