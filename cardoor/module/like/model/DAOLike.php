<?php 
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "model/connect.php");
    
	class DAOLike{
		function select_like(){
			$sql = "SELECT matricula,marca,modelo FROM coches";
			$conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
            return $res;
		}
	}
