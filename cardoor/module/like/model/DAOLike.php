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

		function select_all_cars(){
			$sql = "SELECT * FROM coches ORDER BY id ASC";
	
			$conexion = Conectar::con();
			$res = mysqli_query($conexion, $sql);
			Conectar::close($conexion);
			return $res;
		}

		function insert($datos){
			foreach($datos as $var) {
				$matricula=$var->Matricula;
				$marca = $var->Marca;
				$modelo=$var->Modelo;
	
				$sql = " INSERT INTO fav (matricula, marca, modelo)"
					. " VALUES ('$matricula', '$marca', '$modelo')";
					$conexion = Conectar::con();
					$res = mysqli_query($conexion, $sql);
					Conectar::close($conexion);
			}
			return $res;
		}
	}
