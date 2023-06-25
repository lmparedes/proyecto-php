<?php 
//Capturar excepciones, en codigo susceptible a errores.

try{

    if(isset($_GET['id'])){
        echo "<h1>El parametro es:{$_GET['id']}</h1>";
    }else{
        throw new exception("Faltan parametros por la url");
    }

}catch(Exception $e){
    echo "ha habido un error: ".$e->getMessage();
}

?>