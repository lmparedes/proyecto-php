<?php 

class NotaController{
   public function Listar(){
      //modelo
      require_once 'models/nota.php';

      //logica de la accion del controlador
      $nota = new Nota();

      $notas = $nota->ConseguirTodos('notas');

      //vista
      require_once 'views/nota/listar.php';
   }

   public function crear(){
      //modelo
      require_once 'models/nota.php';

      $nota = new Nota();
      $nota->setUsuario_id(1);
      $nota->setTitulo('Nota desde PHP MVC');
      $nota->setDescripcion('Descripcion de mi nota');
      $guardar = $nota->guardar();

      /*echo $nota->db->error;
      die();*/
      header('Location: index.php?controller=NotaController&action=Listar');
   }

   public function borrar(){
       
   }
}


?>