<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    include_once(dirname(__DIR__) ."/config/globals.php");
    include_once(APPDIR . "/Lib/template.php");

    

    $route = 'form_retirar';
    if(isset($_GET['url'])){
        $route = str_replace('/','',$_GET['url']) ;
    }
    $tem = new App\Lib\template(VIEWS);
    $App = "Error 404";
    switch ($route) {
        case 'form_retirar':{
            $App  = $tem->render('form', []);
            break;
        }
        case 'retirar':{
            $values = "Acceso Denegado";
            if($_POST){
                if($_POST['hash'] === HASH){
                    
                    unset($_POST['hash']);
                    
                    $table = "";
                    
                    foreach ($_POST as $key => $value) {
                        $table .= $tem->render("elementtable", [ "key" => $key, "value" => $value]);
                    }

                    $values = $tem->render(
                        'proceso', 
                        ["table" => $table]
                    );
                    
                }
                
            }
            $App = $values;
            break;
        }
        
    }



echo $tem->render('index', [ "App" => $App ]);
?>