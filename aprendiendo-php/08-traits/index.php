<?php 
//Un trait nos permite definir una serie de metodos para compartirlos entre clases(cuando no queremos utilizar la herencia)

trait Utilidades{
    public function mostrarNombre(){
      echo "<h1>El nombre es ".$this->nombre."</h1>";  
    }
}

class coche{
    public $nombre;
    public $marca;
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellido;
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;
    use Utilidades;
}

$coche = new coche;
$coche->nombre = "Ferrari";
$coche->mostrarNombre();

?>