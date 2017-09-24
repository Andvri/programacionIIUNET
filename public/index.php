<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    var_dump($_GET);
    $route = 'form_retirar';
    if(isset($_GET['url'])){
        $route = str_replace('/','',$_GET['url']) ;
    }

    switch ($route) {
        case 'form_retirar':
            echo "Formulario de Retiro";
            break;
        case 'retirar':
            echo "Envio Solicitud del Retiro";
            break;
    }

?>