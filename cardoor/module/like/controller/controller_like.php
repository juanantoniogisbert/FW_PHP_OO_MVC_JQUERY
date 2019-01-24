<?php 
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';
    include($path . "module/like/model/DAOLike.php");
	
    switch ($_GET['op']) {
		case 'listlike':
				include("module/like/view/like.php");
			break;
			
        case 'datatable':
            try{
				$daolike = new DAOLike();
				$rlt = $daolike->select_like();
			} catch(Exception $e){
				echo json_encode("error");
			}

			if(!$rlt){
				echo json_encode("error");
			}
			else{
				$dinfo = array();
				foreach ($rlt as $row) {
					array_push($dinfo, $row);
				}
				echo json_encode($dinfo);
			}
			break;
			
		default:
			include("view/inc/error404.php");
			break;
	}
