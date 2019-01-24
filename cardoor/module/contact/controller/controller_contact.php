<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/FW_PHP_OO_MVC_JQUERY/cardoor/';

    switch($_GET['op']){

        case 'contact':
            include("module/contact/view/contact.php");
        break;

        default;
            include("view/inc/error404.php");
            break;

        }
