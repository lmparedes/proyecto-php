<?php 
class Coche{
    //atributos o propiedades (variables)
    public $marca;
    public $color;
    public $modelo;
    public $caballaje;
    public $velocidad;
    public $plazas;

    public function __construct($marca, $color, $modelo, $caballaje, $velocidad, $plazas){
        $this->marca = $marca;
        $this->color = $color;
        $this->modelo = $modelo;
        $this->caballaje = $caballaje;
        $this->velocidad = $velocidad;
        $this->plazas = $plazas;
    }

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
?>