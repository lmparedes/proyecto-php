<?php 
class Persona{
    //con el metodo call se detecta que la clase llama a un metodo si el metodo no existe automaticamente se activa el metodo call
    public $nombre;
    public $edad;
    public $ciudad;

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments){
        $prefix_metodo = substr($name, 0, 3);//me va a traer la tres primeras letras del nombre del metodo de la letra 0 a la 3
        
        if($prefix_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name), 3);
            //this->nombre
        if(isset($nombre_metodo)){
            return "El metodo que esta invocando no existe";
        }
            return $this->$nombre_metodo;
        }else{
            echo "El metodo que esta invocando no existe"; 
        }
        
    }
}

$persona = new Persona("Liliana", 18, "Ñemby");
echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();

echo $persona->getHola();

?>