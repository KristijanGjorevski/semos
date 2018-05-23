<?php

$params = explode('/',$_GET['params']);

$controller_name = $params[0];     //controller
$method_name = $params[1];                  //metoda od kontrolerot
$input = $params[2];                        //dopolnitelni parametri


$filename_c = "controllers/{$controller_name}.php";
$filename_m = "models/{$controller_name}.php";

if(file_exists($filename_c) && file_exists($filename_m)){

    include($filename_c);
    include($filename_m);

    $object = new $controller_name;

    if(method_exists($object, $method_name)){
        $res = $object->$method_name();
    } else {
        echo 'Povikavte nepostoecka metoda';
    }
} else {
    echo 'Povikavte nepostoecki kontroler ili model';
}



?>