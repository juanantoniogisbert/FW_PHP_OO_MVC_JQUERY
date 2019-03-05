<?php
    //include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "model/connect.php");

	class DAOShop{
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

		function select_cars_details($id){
			$sql = "SELECT * FROM coches WHERE id='$id'";

			$conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            Conectar::close($conexion);
            return $res;
		}
	}
