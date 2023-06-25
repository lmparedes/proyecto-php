<?php 
class Coche{
    //atributos o propiedades (variables)
    public $marca = 'toyota';
    public $color = 'rojo';
    public $modelo = 'vitz';
    public $caballaje = 500;
    public $velocidad = 300;
    public $plazas = 2;

//Son acciones que hace el objeto (funciones)
    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        return $this->color = $color;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        $this->velocidad;
    }
}//fin definicion de la clase 

//Crear un objeto / instanciar una clase

$coche = new Coche();

//var_dump($coche);
//Usar los metodos
echo $coche->getVelocidad();

$coche->setColor('verde');

echo $coche->getColor();

?>