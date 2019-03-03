<?php
    //include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "/model/connect.php");
class DAOLogin {
//LOGIN
    function usurio_existe($username){

        $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        if( mysqli_num_rows( $res ) > 0 ){
            return true;
        }
        return false;
    }

    function comp_user($datos){
        $username=$datos[username_log];

        $sql = "SELECT * FROM `users` WHERE `usuario` = '$username'";
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        if( mysqli_num_rows( $res ) > 0 ){
            return true;
        }
        return false;
    }

    function select_user($username){

			$sql = "SELECT * FROM users WHERE `username` = '$username'";

			$conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            Conectar::close($conexion);
            return $res;
		}
//REGISTRARTE
    function insert_users($mail, $username, $passwd){
        $sql = " INSERT INTO users (username, passwd, email, tipo)"
        . " VALUES ('$username', '$passwd', '$mail', 'user')";

        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
	}
     function verificar_usuario($datos){
        $username=$datos[username];

        $sql = "SELECT usuario FROM `users` WHERE usuario = '$username'";
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
            if( mysqli_num_rows( $res ) > 0 ){
                return true;
            }
            return false;
    }
    function verificar_email($datos){
       $email=$datos[email];

       $sql = "SELECT email FROM `users` WHERE email = '$email'";
           $conexion = Conectar::con();
           $res = mysqli_query($conexion, $sql);
           Conectar::close($conexion);
           if( mysqli_num_rows( $res ) > 0 ){
               return true;
           }
           return false;
    }

//recovery
    function recovery($datos){
      $username=$datos[user_recov];
      $passwd=$datos[pass_recov];

      $sql = "UPDATE `users` SET passwd = '$passwd' WHERE `usuario` = '$username'";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
      return $res;
    }

    function compr_recobery($datos){
      $username=$datos[user_recov];

      $sql = "SELECT * FROM `users` WHERE `usuario` = '$username'";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
        if( mysqli_num_rows( $res ) > 0 ){
            return true;
        }
        return false;

    }

}