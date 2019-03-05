<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . '/www/2018/RUMA/';
    include($path . "module/cart/model/DAOCart.php");

    switch($_GET['op']){

        case 'view':
          include("module/cart/view/cart.html");
        break;

        case 'checkout':
              $datos = json_decode($_POST['data']);
              $daocart = new DAOCarts();
              $rdo = $daocart->insert($datos);
              $usu = $_SESSION['users']['usuaro'];
              if ($rdo == true){
                echo json_encode("TODO_OK");
                exit();
              }else{
                echo json_encode("error");
                exit();
              }
        break;

        default;
        include("view/inc/error404.php");
        break;
    }
