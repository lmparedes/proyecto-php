<?php 
require_once 'clases.php';

$informatico1 = new Informatico;
var_dump($informatico1);

$informatico1->setNombre('Liliana');

var_dump($informatico1);

echo $informatico1->RepararOrdenador();

$TecnicoRedes1 = new TecnicoRedes;
var_dump($TecnicoRedes1);

?>