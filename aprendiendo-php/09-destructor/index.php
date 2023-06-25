<?php 
class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Liliana Guerrero";
        $this->email = "lmguerrero@gmail.com";
    }

    public function __toString(){
       return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct(){
        echo "</br>Destruyendo el objeto";
    }

}

$usuario = new Usuario();
echo $usuario;
?>