<?php 
require_once 'autoload.php';

if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'];
}else{
    echo 'La pagina que buscas no existe2';
    exit();
}

if(class_exists($nombre_controlador)){
    
    $controlador = new $nombre_controlador();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        var_dump($action);
        echo 'La pagina que buscas no existe';
    }
}else{   
}
?>