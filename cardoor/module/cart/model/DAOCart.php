<?php
    //include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "model/connect.php");

    class DAOCart{
      function select_all_cars(){
        $sql = "SELECT * FROM coches ORDER BY id ASC";

        $conexion = Conectar::con();
              $res = mysqli_query($conexion, $sql);
              Conectar::close($conexion);
              return $res;
      }

      function select_cars($id){
        $sql = "SELECT * FROM coches WHERE id='$id'";

        $conexion = Conectar::con();
        $rdo = mysqli_query($conexion, $sql)->fetch_object();
        Conectar::close($conexion);
        return $rdo;
      }

      function select_precio($id){
          $sql = "SELECT precio FROM coches WHERE id='$id'";
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
          
          return $res;
      }

      function select_user($id){
        $sql = "SELECT * FROM users WHERE id='$id'";

        $conexion = Conectar::con();
        $rdo = mysqli_query($conexion, $sql)->fetch_object();
        Conectar::close($conexion);
        return $rdo;
      }

      function insert($datos, $user) {
        foreach($datos as $var) {
          $marca = $var->Marca;
          $modelo=$var->Modelo;
          $precio=$var->Precio;
          $unidades=$var->Unidades;
          $total = $precio * $unidades;
          $usuario=$user;

          if (empty($user)){
            return "error_log";
          }else{
            $sql = " INSERT INTO cart (marca, modelo, precio, unidades, total, fecha, user)"
                . " VALUES ('$marca', '$modelo', '$precio', '$unidades', '$total', now(), '$user')";
                $conexion = Conectar::con();
                $res = mysqli_query($conexion, $sql);
                Conectar::close($conexion);
          }
        }
        return $res;
      }
    }
