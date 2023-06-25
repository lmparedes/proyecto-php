<?php 
//Herencia:es la posibilidad de compartir atributos y metodos entre clases

class Persona{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }

    public function setApellidos($apellidos){
        return $this->apellidos = $apellidos;
    }

    public function setAltura($altura){
        return $this->altura = $altura;
    }

    public function setEdad($edad){
        return $this->edad = $edad;
    }

    public function Hablar(){
        return 'Estoy hablando';
    }

    public function Caminar(){
        return 'Estoy caminando';
    }
}

class Informatico extends Persona{
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct(){
        $this->lenguajes = 'HTML, CSS, JS';
        $this->experienciaProgramador = 10;
    }

    public function programar(){
        return 'Soy programador';
    }

    public function RepararOrdenador(){
        return 'Reparo ordenadores';
    }

    public function HacerOfimatica(){
        return 'Estoy escribiendo en word';
    }
}
    class TecnicoRedes extends Informatico{
        public $auditarRedes;
        public $experienciaRedes;

        public function __construct(){
            parent::__construct();//accede a la clase padre de la que esta heredando y 
            //llama de manera estatica al metodo construct()
            
            $this->auditoriaRedes = 'experto';
            $this->experienciaRedes = '5';
        }

        public function auditar(){
            return 'Estoy auditando una red';
        }
    }

?>