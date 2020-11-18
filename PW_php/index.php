<?php

require "config.php";

$url = $_GET["url"] ?? "Index/Index";
$url = explode("/",$url);

$params = "";
$controller = "";
$method = "";

if (isset($url[0])) {
    $controller = $url[0];
}

if (isset($url[1])) {
    if ($url[1] != '') {
        $method = $url[1];
    }    
}

if (isset($url[2])) {
    if ($url[2] != '') {
        $params = $url[2];
    }    
}

spl_autoload_register(function($class){
    //echo $class;
    if (file_exists(LBS.$class.".php")) {
        require LBS.$class.".php";
    }
});

//LLAMAMOS A LOS CONTROLADORES
$controller = $controller.'Controller';
$controllersPath = 'controllers/'.$controller.'.php';
if (file_exists($controllersPath)) {
    require $controllersPath;

    //INSTANCIAMOS DE LA CLASE
    $controller = new $controller();

    if (isset($method)) {
        if (method_exists($controller,$method)) {
            if (isset($params)) {
                $controller->{$method}($params);
            }else {
                $controller->{$method}();
            }
        }
    }
    
}

?>