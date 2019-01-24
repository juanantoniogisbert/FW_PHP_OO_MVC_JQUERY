<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
    if ((isset($_GET['page'])) && ($_GET['page']==="controller_cars") ){
		  include("view/inc/top_pages_vehicle.php");
    }else if ((isset($_GET['page'])) && ($_GET['page']==="controller_MasVistos") ){
      include("view/inc/top_pages_vehicle.php");
    }else if ((isset($_GET['page'])) && ($_GET['page']==="controller_login") ){
      include("view/inc/top_pages_vehicle.php");
    }else if ((isset($_GET['page'])) && ($_GET['page']==="controller_perfil") ){
    include("view/inc/top_pages_vehicle.php");
    }else{
  	  include("view/inc/top_pages.php");
  	}

//    require('traduccion/lang.php');
//    if (isset($_POST["lang"])){
//            $lang = $_POST["lang"];
//            $_SESSION ["lang"] = $lang;
//        }

//        if(isset($_SESSION['lang'])){
//            include ('traduccion/lang.php');
//        }else{
//            include ('traduccion/es.php');
//        }

?>
<div id="wrapper">
    <div id="header">
    	<?php
    	    include("view/inc/header.php");
    	?>
    </div>
    <div id="menu">
          <!-- if (isset($_SESSION['type']) && ($_SESSION['type'] == "admin")){
              include("view/inc/menu_admin.php");
            }else if (isset($_SESSION['type']) && ($_SESSION['type'] == "user")){
                include("view/inc/menu_user.php");
            }else{
          } -->
    </div>
    <div id="">
    	<?php
                include("view/inc/menu.php");
		    include("view/inc/pages.php");
		?>
        <br style="clear:both;" />
    </div>
    <div id="footer">
	    <?php
	        include("view/inc/footer.php");
	    ?>
    </div>
</div>
<?php
    include("view/inc/bottom_page.php");
?>
