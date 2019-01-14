<?php
	switch($_GET['page']){
		case "home";
			include("module/home/view/home.php");
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
		case "contactus";
			include("module/contact/".$_GET['page'].".php");
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
?>