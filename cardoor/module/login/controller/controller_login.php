<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "module/login/model/DAOLogin.php");
    @session_start();

    switch($_GET['op']){

        case 'viewlogin':
          include("module/login/view/login.html");
        break;

        case 'viewregis':
          include("module/login/view/register.html");
        break;

        case 'registrar':
				  // $val = validate_register();
          // if($val['result']){
            try {
              $daologin = new DAOLogin();
              $hashed_password = password_hash($_POST['passwd'], PASSWORD_DEFAULT); 
              $res = $daologin->insert_users($_POST['mail'], $_POST['username'], $hashed_password);
            } catch (Exception $e) {
              echo "Error al registrarse1";
              exit();
            }
            if(!$res){
              echo "Error al registrarse";
              exit();
            }else{
              if (isset($_SESSION['purchase']) && $_SESSION['purchase'] === 'on'){
                echo 'okay';
                exit();
              }else{
                // echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."\n";
                echo 'ok';
                exit();	
              }
            }	
          // }else{
          //   echo $val['error'];
          //   exit();
          // }
        break;
      

        case 'login':
          try {
            $daologin = new DAOLogin();
            $res = $daologin->select_user($_POST['username']);
          } catch (Exception $e) {
            echo "error";
            exit();
          }
          if(!$res){
            echo "El usuario no existe";
            exit();
          }else{
            $value = get_object_vars($res);
            if (password_verify($_POST['passwd'],$value['passwd'])) {
                echo 'ok';
                $_SESSION['tipo'] = $value['tipo'];
                $_SESSION['username'] = $value['username'];
                $_SESSION['email'] = $value['email'];
                $_SESSION['tiempo'] = time();
                // echo "<script>console.log('MOSTRA: ". $_SESSION['username'] . "');</script>";
                // exit();
                exit();
            }else {
                echo "No coinciden los datos";
                exit();
              }
            }
        break;

        case 'logout':
          unset($_SESSION['type']);
          session_destroy();
          $callback = 'index.php?page=controller_login&op=viewlogin';
          die('<script>window.location.href="'.$callback.'";</script>');
        break;

        case 'avat':
          $send = $_SESSION['email'];
          echo "$send";
        break;

        case 'actividad':
          if (!isset($_SESSION["tiempo"])) {  
            echo "activo";
          } else {  
            if((time() - $_SESSION["tiempo"]) >= 900) {  
              echo "inactivo"; 
              exit();
            }else{
              echo "activo";
              exit();
            }
          }
        break;

        case 'reg':
            if (!isset($_SESSION["tiempo"])) {
                echo "none";
            } else {
                session_regenerate_id();
                exit();
            }
            break;

        default;
        include("view/inc/error404.php");
        break;
    }
