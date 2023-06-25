<?php 
require_once '../vendor/autoload.php';
//conexion bd
$conexion = new mysqli("localhost", "root", "", "notas_master");
$conexion->query("SET NAMES'UTF8'");

//Consulta a paginar
$consulta = $conexion->query("SELECT * FROM notas");
$numero_elementos = $consulta->num_rows;
$numero_elementos_pagina = 2;
//hacer paginacion
$pagination = new Zebra_Pagination();

//numero total elementos a paginar
$pagination->records($numero_elementos);

//numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

$page = $pagination->get_page();

$empieza_aqui = (($page - 1) * $numero_elementos_pagina);
$notas = $conexion->query("SELECT * FROM notas LIMIT $empieza_aqui, $numero_elementos_pagina");

while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3></hr>";
}

?>