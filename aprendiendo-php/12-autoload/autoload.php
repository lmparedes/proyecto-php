<?php 
function autoCargar_clases($class){
    require_once 'clases/' . $class .'.php';
}

spl_autoload_register('autoCargar_clases');//va a buscar todas las clases del directorio que yo le indique

?>