<?php 
    function MostrarError($errores, $campo){
        $alerta = '';
        if(isset($errores[$campo]) && !empty($campo)){
            $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
        }
    return $alerta;
    }

    function BorrarErrores(){
        $borrado = false; 
        if(isset($_SESSION['errores'])){ 
            $_SESSION['errores'] = null;
            $borrado = true;
        }
         if(isset($_SESSION['errores_entrada'])){ 
            $_SESSION['errores'] = null;
            $borrado = true;
        }
         if(isset($_SESSION['completado'])){ 
            $_SESSION['completado'] = null;
            $borrado = true;
        }
    }

    function conseguirCategorias($conexion){
        $sql = "SELECT * FROM categorias ORDER BY id ASC;";
        $categorias = mysqli_query($conexion, $sql);
        $result = array();
        if($categorias && mysqli_num_rows($categorias) >= 1){
            $result = $categorias;
        }
        return $result;
    }

     function conseguirCategoria($conexion, $id){
        $sql = "SELECT * FROM categorias where id = $id;";
        $categorias = mysqli_query($conexion, $sql);

        $result = array();
        if($categorias && mysqli_num_rows($categorias) >= 1){
            $result = mysqli_fetch_assoc($categorias);
        }
        return $result;
    }

      function conseguirEntrada($conexion, $id){
        $sql = "SELECT e.*, c.nombre as 'categoria' FROM entradas e
                INNER JOIN categorias c ON c.id = e.categoria_id
                where e.id = $id";
        $entrada = mysqli_query($conexion, $sql);

        $result = array();
        if($entrada && mysqli_num_rows($entrada) >= 1){
            $result = mysqli_fetch_assoc($entrada);
        }
        return $result;
    }

    function conseguirUltimasEntradas($conexion){
        $sql = "SELECT e.*, c.nombre as 'categoria' FROM entradas e
                INNER JOIN categorias c on c.id = e.categoria_id
                ORDER BY e.id DESC LIMIT 4";
        $entradas = mysqli_query($conexion, $sql);
        $result = array();
        if($entradas && mysqli_num_rows($entradas) >= 1){
            $result = $entradas;
        }
        return $entradas;
    }

        function conseguirTodasEntradas($conexion, $categoria = null){
        $sql = "SELECT e.*, c.nombre as 'categoria' FROM entradas e
                INNER JOIN categorias c on c.id = e.categoria_id";
        $result = array();
        if(!empty($categoria) && is_int($categoria)){
            $sql = "SELECT e.*, c.nombre as 'categoria' FROM entradas e
                    INNER JOIN categorias c on c.id = e.categoria_id
                    WHERE e.categoria_id = $categoria ORDER BY e.id DESC;";
        }
        $entradas = mysqli_query($conexion, $sql);
        if($entradas && mysqli_num_rows($entradas) >= 1){
            $result = $entradas;
        }
        return $entradas;
    }
?>