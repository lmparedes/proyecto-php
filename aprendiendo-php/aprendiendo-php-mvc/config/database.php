<?php 
class database{
    public static function conectar(){
        $conexion = new mysqli("localhost", "root", "", "notas_master");
        $conexion->query("SET NAMES'UTF8'");

        return $conexion;
    }
} 

?>