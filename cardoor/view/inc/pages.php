<?php
	if (isset($_GET['page'])){
		switch($_GET['page']){
			case "home";
				include("module/home/view/home.php");
				break;
			case "controller_home";
				include("module/home/controller/".$_GET['page'].".php");
				break;
			case "controller_cars";
				include("module/vehicle/controller/".$_GET['page'].".php");
				break;
			case "services";
				include("module/service/".$_GET['page'].".php");
				break;
			case "aboutus";
				include("module/about/".$_GET['page'].".php");
				break;
			case "controller_contact";
				include("module/contact/controller/".$_GET['page'].".php");
				break;
			case "controller_like";
				include("module/like/controller/".$_GET['page'].".php");
				break;
			case "404";
				include("view/inc/error".$_GET['page'].".php");
				break;
			case "503";
				include("view/inc/error".$_GET['page'].".php");
				break;
			default;
				include("module/home/view/home.php");
				break;
		}
	}else{
		$_GET['op'] = 'home';
		include("module/home/controller/controller_home.php");
	}
?>