<?php
    //include("module/cars/model/DAOCars.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "module/home/model/DAOHome.php");

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

        // case 'listvistos':
        //     try{
        //         $daohome = new DAOHome();
        //         $rdo = $daohome->select_all_cars();
        //     }catch (Exception $e){
        //         $callback = 'index.php?page=503';
        //         die('<script>window.location.href="'.$callback .'";</script>');
        //     }
        //     if(!$rdo){
        //         $callback = 'index.php?page=503';
        //         die('<script>window.location.href="'.$callback .'";</script>');
        //     }else{
        //         include("module/home/view/home.php");
        //     }
        //     break;

        // case 'dropdown':
        //     try{
        //       $daohome = new DAOHome();
        //     	$rdo = $daohome->obtenerTodasLasGamas();
        //     }catch (Exception $e){
        //         echo json_encode("error1");
        //         exit;
        //     }
        //     if(!$rdo){
    	// 		    echo json_encode("error2");
        //       exit;
        // 		}else{
        //       $gamas = array();
        //       foreach ($rdo as $value) {
        //       array_push($gamas, $value);
        //       }
        //       echo json_encode($gamas);
        // 		}
        //       break;

        // case 'dropdown2':
        //     try{
        //       $daohome = new DAOHome();
        //       $rdo = $daohome->obtenerTodasLasMarcas($_GET['gama']);
        //     }catch (Exception $e){
        //       echo json_encode("error1");
        //       exit;
        //     }
        //     if(!$rdo){
        //       echo json_encode("error2");
        //       exit;
        //     }else{
        //       $marcas = array();
        //       foreach ($rdo as $value) {
        //       array_push($marcas, $value);
        //       }
        //       echo json_encode($marcas);
        //     }
        //       break;

        // case 'autocomplete':
        //       try{
        //         $daohome = new DAOHome();
        //         $rdo = $daohome->autocomplete($_GET['marca']);

        //       }catch (Exception $e){
        //        echo json_encode("error1");
        //       }
        //       if(!$rdo){
        //           echo json_encode("error2");
        //         }else{
        //         foreach ($rdo as $value) {
        //         echo '<div>
        //                 <a class="suggest-element" data="'.$value['modelo'].'" id="service'.$value['id'].'">'.utf8_encode($value['modelo']).'</a>
        //               </div>';
        //         }
        //        }
        //         break;

        // case 'list_auto':

        //     try{
        //       $daohome = new DAOHome();
        //       $rdo = $daohome->listautocomplete($_GET['marca'],$_GET['modelo']);
        //     }catch (Exception $e){
        //       echo json_encode("error1");
        //       exit;
        //     }
        //     if(!$rdo){
        //       echo json_encode("error2");
        //       exit;
        //     }else{
        //       $info = array();
        //       foreach ($rdo as $row) {
        //         array_push($info, $row);
        //       }
        //       echo json_encode($info);
        //     }
        //       break;




        default;
            include("view/inc/error404.php");
            break;

        }
