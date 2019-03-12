<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "module/cart/model/DAOCart.php");
    @session_start();

    switch($_GET['op']){

        case 'view':
          include("module/cart/view/cart.html");
        break;

        case 'checkout':
              $datos = json_decode($_POST['data']);
              $user = $_SESSION['username'];
              $daocart = new DAOCart();
              $rdo = $daocart->insert($datos, $user);
      
              if ($rdo === "error_log"){
                echo json_encode("errorlogin");
                exit();
              } 
              if ($rdo == true){
                echo json_encode("TODO_OK");
                exit();
              }else if($rdo === "error_log"){
                echo json_encode("errorlogin");
                exit();
              }else{
                echo json_encode("error");
                exit();
              }
        break;

        default;
          include("view/inc/error404.php");
        break;

        case 'productes':
          try {
              $daocart = new DAOCart();
              $rdo = $daocart->select_cars($_GET['id']);
              $datos = get_object_vars($rdo);
          } catch (Exception $e) {
              echo json_encode("error1");
          }
          
          if (!$rdo) {
              echo json_encode("error2");
          }else{
              echo json_encode($rdo);
              // exit();
          }
        break;

        default;
          include("view/inc/error404.php");
        break;
    }
