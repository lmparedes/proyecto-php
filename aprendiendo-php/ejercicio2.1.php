<?php 
/*
Recorrer y mostrar
ordenar y mostrar
mostrar su longitud
buscar algun elemento 
*/

function MostrarArray($numeros){
  $resultado = '';  
  foreach($numeros as $numero){
    $resultado .= $numero.'<br>'; 
}  
    return($resultado);
}

$numeros = array(10, 20, 15, 13, 18, 16, 90, 95, 67);

sort($numeros);
echo MostrarArray($numeros);

echo('<h1>'.'Mostrar longitud'.'</h1>');

echo count($numeros);
?>