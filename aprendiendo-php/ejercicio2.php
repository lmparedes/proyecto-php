<?php 
/*Mostrar todos los numeros pares del 1 al 100*/

$numero = 0;

for($numero == 1; $numero <= 100; $numero++){
    if($numero%2 == 0){
        echo($numero).'<br>';
    }
}    
?>