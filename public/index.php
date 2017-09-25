<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    include_once(dirname(__DIR__) ."/config/globals.php");
    include_once(APPDIR . "/Lib/template.php");

    $layout = new App\Lib\template( VIEWS."/index.tem.php");

    $route = 'form_retirar';
    if(isset($_GET['url'])){
        $route = str_replace('/','',$_GET['url']) ;
    }

    switch ($route) {
        case 'form_retirar':{
            $formulario = new App\Lib\template( VIEWS."/form.tem.php");
            $layout->set('App', $formulario->output());
            break;
        }
        case 'retirar':{
            $layout->set('App', $_POST ? "Retirar" : "Error 404" );
            break;
        }
        default:
            $layout->set('App', "Error 404");
            break;
    }
    echo $layout->output();
?>