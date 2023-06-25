<?php 
require_once 'modeloBase.php';

class Nota extends ModeloBase{
    public $usuario_id;
    public $titulo;
    public $descripcion;

    public function __construct(){
        parent::__construct();
    }

    public function getUsuario_id(){
        return $this->usuario_id;
    }

    public function getTitulo(){
        return $this->nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

     public function setdescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function setUsuario_id($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    public function guardar(){
       $sql = "INSERT INTO notas(usuario_id, titulo, descripcion, fecha)VALUES({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE());";

       $guardado = $this->db->query($sql);
       return $guardado;
    }
}
?>