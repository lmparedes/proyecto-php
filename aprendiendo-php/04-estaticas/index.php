<?php 
require_once 'configuracion.php';

ConfiguracionStatic::setColor('blue');
ConfiguracionStatic::setNewsletter(TRUE);
ConfiguracionStatic::setEntorno('localhost');

echo ConfiguracionStatic::$color;
?>