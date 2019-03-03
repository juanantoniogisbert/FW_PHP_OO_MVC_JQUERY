<?php 
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
		include($path . "module/like/model/DAOLike.php");
		@session_start();
		if (isset($_SESSION["tiempo"])) {  
	    $_SESSION["tiempo"] = time(); //Devuelve la fecha actual
		}
	
    switch ($_GET['op']) {
			case 'listlike':
				include("module/like/view/like.php");
			break;

			case 'datatable':
				$datos = json_decode($_POST['data']);
				$daolike = new DAOLike();
				$rdo = $daolike->insert($datos);
				// $usu = $_SESSION['users']['usuaro'];
				if ($rdo == true){
					echo json_encode("TODO_OK");
					exit();
				}else{
					echo json_encode("error");
					exit();
				}
			break;
			
      // case 'datatable':
      // try{
			// 	$daolike = new DAOLike();
			// 	$rlt = $daolike->select_like();
			// } catch(Exception $e){
			// 	echo json_encode("error");
			// }

			// if(!$rlt){
			// 	echo json_encode("error");
			// }
			// else{
			// 	$dinfo = array();
			// 	foreach ($rlt as $row) {
			// 		array_push($dinfo, $row);
			// 	}
			// 	echo json_encode($dinfo);
			// }
			// break;
			
		default:
			include("view/inc/error404.php");
			break;
	}
