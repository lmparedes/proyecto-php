<?php 

function autoCargar($classname){
    include 'controllers/'. $classname . '.php';
}

spl_autoload_register('autoCargar');

?>