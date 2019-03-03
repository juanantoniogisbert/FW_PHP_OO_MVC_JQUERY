<?php
    //include("module/cars/model/DAOCars.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "module/home/model/DAOHome.php");
    @session_start();
    if (isset($_SESSION["tiempo"])) {  
	    $_SESSION["tiempo"] = time(); //Devuelve la fecha actual
	}

    switch($_GET['op']){

        case 'home':
            try{
                $daohome = new DAOHome();
                $rdo = $daohome->select_all_cars();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/home/view/home.php");
            }
        break;

        case 'read_modal':
            // echo $_GET["modal"];
            // exit;
            try{
                $daohome = new DAOHome();
                $rdo = $daohome->select_cars($_GET['modal']);
            }catch (Exception $e){
                echo json_encode("error1");
                exit;
            }
            if(!$rdo){
                echo json_encode("error2");
                exit;
            }else{
                $cars=get_object_vars($rdo);
                echo json_encode($cars);
                exit;
            }
        break;

        case 'dropdown':
            try{
                $daohome = new DAOHome();
                $rdo = $daohome->obtenertipo();
            }catch (Exception $e){
                echo json_encode("error1");
                exit;
            }
            if(!$rdo){
    			    echo json_encode("error2");
            exit;
        	}else{
              $tipos = array();
              foreach ($rdo as $value) {
                array_push($tipos, $value);
              }
                echo json_encode($tipos);
                exit;
        	}
        break;

        case 'dropdown2':
            try{
              $daohome = new DAOHome();
              $rdo = $daohome->obtenergama($_GET['tipo']);
            }catch (Exception $e){
              echo json_encode("error1");
              exit;
            }
            if(!$rdo){
              echo json_encode("error2");
              exit;
            }else{
              $gamas = array();
              foreach ($rdo as $value) {
              array_push($gamas, $value);
              }
              echo json_encode($gamas);
              exit;
            }
        break;

        case 'autocomplete':
            try{
                $daohome = new DAOHome();
                $rdo = $daohome->autocomplete($_GET['tipo'], $_GET['gama'], $_GET['marca']);
            }catch (Exception $e){
                echo json_encode("error1");
                exit;
            }
            if(!$rdo){
                echo json_encode("error2");
                exit;
            }else{
                foreach ($rdo as $value) {
                    echo '<div>
                            <a class="suggest-element" data="'.$value['marca'].'" id="service'.$value['id'].'">'.utf8_encode($value['marca']).'</a>
                        </div>';
                }
                exit;
            }
        break;

        case 'red':
            try{
                $daohome = new DAOHome();
                $rdo = $daohome->listautocomplete($_GET['tipo'],$_GET['gama'],$_GET['marca']);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/shop/view/shop.php");
            }
            break;

        default;
            include("view/inc/error404.php");
            break;

        }
