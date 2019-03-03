<?php

    $path  = $_SERVER ['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "module/vehicle/model/DAOCars.php");
    @session_start();
    if (isset($_SESSION["tiempo"])) {  
	    $_SESSION["tiempo"] = time(); //Devuelve la fecha actual
	}
    
    switch($_GET['op']){
        case 'list';
            try{
                $daocars = new DAOCars();
            	$rdo = $daocars->select_all_cars();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/vehicle/view/list_vehicle.php");
                
    		}
            break;
            
        case 'create';
            // include("module/vehicle/model/validate.php");
            
            $error='';
            $error='';
            $error='';
            $error='';
            $error='';
            $error='';
            $error='';
            $error='';
            $error='';
            $error='';
            $error='';
            $error='';
            $error='';
            $error='';

            $check = true;
            
            if (isset($_POST['create'])){
                // $check=validate();
                
                if ($check){
                    $_SESSION['coches']=$_POST;
                    try{
                        $daocars = new DAOCars();
    		            $rdo = $daocars->insert_cars($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_cars&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');

            		}
                }
            }
            include("module/vehicle/view/create_vehicle.php");
            break;
            
        case 'update';
            // include("module/vehicle/model/validate.php");
            
            $check = true;
            
            if (isset($_POST['update'])){
                // $check=validate();
                
                if ($check){
                    $_SESSION['coches']=$_POST;
                    try{
                        $daocars = new DAOCars();
    		            $rdo = $daocars->update_cars($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_cars&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            
            try{
                $daocars = new DAOCars();
            	$rdo = $daocars->select_cars($_GET['id']);
            	$cars=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                $error_matricula='';
                $error_marca='';
                $error_modelo='';
                $error_fabricante='';
                $error_tipo='';
                $error_combus='';
                $error_extra='';
                $error_color='';
                $error_puertas='';
                $error_caballos='';
                $error_marchas='';
                $error_velocidad='';
                $error_motor='';
                $error_date_fabric='';
        	    include("module/vehicle/view/update_vehicle.php");
    		}
            break;
            
        case 'read';
            try{
                $daocars = new DAOCars();
            	$rdo = $daocars->select_cars($_GET['modal']);
            	// $cars=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                $cars=get_object_vars($rdo);
                echo json_encode($cars);
                exit;
    		}
            break;
            
        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daocars = new DAOCars();
                	$rdo = $daocars->delete_cars($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_cars&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/vehicle/view/delete_vehicle.php");
            break;

        case 'deleteall';
            if (isset($_POST['deleteall'])){
                try{
                    $daocars = new DAOCars();
                	$rdo = $daocars->delete_all_cars();
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_cars&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/vehicle/view/delete_all_vehicle.php");
            break;

        case 'read_modal':
            // echo $_GET["modal"];
            // exit;
            try{
                $daocars = new DAOCars();
                $rdo = $daocars->select_cars($_GET['modal']);
        
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
            
        default;
            include("view/inc/error404.php");
            break;
    }


    