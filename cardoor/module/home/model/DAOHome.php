<?php
    //include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/cardoor/';
    include($path . "model/connect.php");
class DAOHome {
    function obtenerTodasLasGamas() {
      $sql = "SELECT idgama, nombre FROM gamas";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
      return $res;
    }
    function obtenerTodasLasMarcas($gama){
      $sql = "SELECT m.idmarca, m.nombre FROM marcas m INNER JOIN gamas g WHERE m.idgama = g.idgama AND g.nombre = '$gama' ";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
      return $res;
    }
    function select_all_cars(){
      $sql = "SELECT * FROM coche ORDER BY id ASC";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
      return $res;
    }
    function autocomplete($marca){
      $search = $_POST['service'];
      // $sql = "SELECT marca, modelo FROM coche WHERE marca = '$marca' AND modelo LIKE ' " . $search  ." %'";
      $sql = "SELECT marca, modelo, id FROM coche WHERE marca = '$marca' AND modelo LIKE'".$search."%'";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
      return $res;
    }

    function listautocomplete($marca){
      // $marca=$_POST['vistaauto'];
      $search = $_POST['vistaauto'];
      // $sql = "SELECT marca, modelo, precio, id FROM coche WHERE marca = '$marca' AND modelo LIKE ' " . $search  ." %'";
      $sql = "SELECT marca, modelo, precio, id FROM coche WHERE marca = '$marca' AND modelo LIKE'".$search."%'";
      $conexion = Conectar::con();
      $res = mysqli_query($conexion, $sql);
      Conectar::close($conexion);
      return $res;
    }
}
