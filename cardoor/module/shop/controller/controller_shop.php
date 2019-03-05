<?php
    //include("module/cars/model/DAOCars.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "module/shop/model/DAOShop.php");
    @session_start();
    if (isset($_SESSION["tiempo"])) {  
	    $_SESSION["tiempo"] = time(); //Devuelve la fecha actual
	}

    switch($_GET['op']){

        case 'viewshop':
            include("module/shop/view/shop.php");
        break;

		case 'data_shop':
			try {
				$daoshop = new DAOShop();
				$rdo = $daoshop->select_all_cars();
			} catch (Exception $e) {
				echo json_encode("error");
			}
			
			if (!$rdo) {
				echo json_encode("error");
			}else{
				$prod = array();
				foreach ($rdo as $value) {
					array_push($prod, $value);
				}
				echo json_encode($prod);
                // print_r($prod);
                exit();
			}
		break;

        case 'read_modal':
            try{
                $daoshop = new DAOShop();
            	$rdo = $daoshop->select_cars($_GET['modal']);
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

        case 'like':
            $datos = json_decode($_POST['data']);
            $daoshop = new DAOShop();
            $rdo = $daoshop->insert($datos);
            if ($rdo == true){
                echo json_encode("TODO_OK");
                exit();
            }else{
                echo json_encode("error");
                exit();
            }
        break;

        case 'details':
            try {
                $daoshop = new DAOShop();
                $res = $daoshop->select_cars_details($_SESSION['id']);
                $datos = get_object_vars($res);
            } catch (Exception $e) {
                echo json_encode("error1");
            }
            
            if (!$res) {
                echo json_encode("error2");
            }else{
                echo json_encode($res);
                exit();
            }
        break;
        
        case 'details2':
            $_SESSION['id']=$_GET['id'];
            include("module/shop/view/details_shop.php");
        break;


        default;
            include("view/inc/error404.php");
        break;
    }
