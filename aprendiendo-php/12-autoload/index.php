<?php 
require_once 'autoload.php';
//el autoload nos permite que el archivo nos haga el include de otros archivos de manera automatica
/*$usuario = new Usuario();
echo $usuario->nombre;
echo "</br>";
echo $usuario->email;*/

//Espacios de nombres y paquetes 
use MisClases\Usuario, MisClases\Entrada, MisClases\Categoria;
use PanelAdministrador\Usuario as usuarioAdmin;

class Principal{
    public $usuario;
    public $entrada;
    public $categoria;

    public function __contruct(){
        $this->usuario  = new Usuario();
        $this->entrada  = new Entrada();
        $this->entrada  = new Categoria();
    }
}
//objeto principal
$principal = new Principal();
var_dump($principal);

//objeto otro paquete
$usuario = new usuarioAdmin();
var_dump($usuario);
?>