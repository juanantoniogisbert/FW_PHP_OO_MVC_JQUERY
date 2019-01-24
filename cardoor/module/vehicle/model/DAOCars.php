<?php
    // include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/cardoor/';
    include($path . "model/connect.php");

	class DAOCars{
		function insert_cars($datos){
        	$tipo=$datos[tipo];
            $matricula=$datos[matricula];
        	$marca=$datos[marca];
        	$modelo=$datos[modelo];
        	$fabricante=$datos[fabricante];
			$combus=$datos[combus];
			$extra=$extra[extra];
        	$color=$datos[color];
        	$puertas=$datos[puertas];
        	$caballos=$datos[caballos];
        	$marchas=$datos[marchas];
        	$velocidad=$datos[velocidad];
        	$motor=$datos[motor];
        	$date_fabric=$datos[date_fabric];

        	foreach ($datos[extra] as $indice) {
        	    $extra=$extra."$indice,";
        	}
        	// $comment=$datos[observaciones];
        	// foreach ($datos[aficion] as $indice) {
        	//     $hobby=$hobby."$indice:";
        	// }
        	$sql = " INSERT INTO coches (matricula, marca, modelo, fabricante, tipo, combus, extra, color, puertas, caballos, marchas, velocidad, motor, date_fabric)"
        		. " VALUES ('$matricula', '$marca', '$modelo', '$fabricante', '$tipo', '$combus', '$extra', '$color', '$puertas', '$caballos', '$marchas', '$velocidad', '$motor', '$date_fabric')";

            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}

		function select_all_cars(){
			$sql = "SELECT * FROM coches ORDER BY id ASC";

			$conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
            return $res;
		}

		function select_cars($matricula){
			$sql = "SELECT * FROM coches WHERE matricula='$matricula'";
			$conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            Conectar::close($conexion);
            return $res;
		}

        function matricula($cars){
            $sql = "SELECT * FROM coches WHERE matricula='{$cars['matricula']}'";

            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            Conectar::close($conexion);
            return $res;
        }

		function update_cars($datos){
            $tipo=$datos[tipo];
            $matricula=$datos[matricula];
        	$marca=$datos[marca];
        	$modelo=$datos[modelo];
        	$fabricante=$datos[fabricante];
        	$combus=$datos[combus];
        	$color=$datos[color];
        	$puertas=$datos[puertas];
        	$caballos=$datos[caballos];
        	$marchas=$datos[marchas];
        	$velocidad=$datos[velocidad];
        	$motor=$datos[motor];
        	$date_fabric=$datos[date_fabric];

        	foreach ($datos[extra] as $indice) {
        	    $extra=$extra."$indice,";
        	}

        	$sql = " UPDATE coches SET tipo='$tipo', marca='$marca', modelo='$modelo', fabricante='$fabricante', combus='$combus', extra='$extra',"
        	. " color='$color', puertas='$puertas', caballos='$caballos', marchas='$marchas', velocidad='$velocidad', motor='$motor', date_fabric='$date_fabric' WHERE matricula='$matricula'";
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}

		function delete_cars($cars){
			$sql = "DELETE FROM coches WHERE id='$cars'";

			$conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
            return $res;
		}

		function delete_all_cars($cars){
			$sql = "DELETE FROM coches";

			$conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
            return $res;
		}
	}
