<?php 
//Una clase abstracta es una clase que no se puede instanciar
//en cambio si se puede heredas sus propiedades y funciones
//puede llegar a tener funciones abstractas no definidas pero obligatoriamente 
//esa funcion debe ser definida en el hijo
abstract class Ordenador{
    public $encendido;

    abstract public function Encender();

    public function Apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador{
    public $software;

    public function ArrancarSoftware(){
        $this->software = true;
    }

    public function Encender(){
        $this->encendido = true;
    }
}

$Ordenador = new PcAsus();
var_dump($Ordenador);
$Ordenador->ArrancarSoftware();

?>