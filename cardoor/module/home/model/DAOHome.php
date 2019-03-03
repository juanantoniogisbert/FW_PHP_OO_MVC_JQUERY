<?php
    //include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "model/connect.php");
class DAOHome {
    function obtenertipo(){
      $sql = "SELECT DISTINCT tipo FROM coches";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
      return $res;
    }

    function obtenergama($tipo) {
      $sql = "SELECT DISTINCT gama FROM coches WHERE tipo = '$tipo'";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
      return $res;
    }

    function autocomplete($tipo, $gama, $marca){
      $search = $_POST['service'];
      $sql = "SELECT tipo, gama, marca, id FROM coches WHERE tipo = '$tipo' AND gama='$gama' AND marca LIKE '".$search."%' GROUP BY id";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
      return $res;
    }

    function listautocomplete($tipo, $gama, $marca){
      $sql = "SELECT DISTINCT * FROM coches WHERE tipo= '$tipo' AND gama= '$gama' AND marca= '$marca'";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
      return $res;
    }
    
    function select_all_cars(){
			$sql = "SELECT * FROM coches ORDER BY id ASC limit 6";
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
}
