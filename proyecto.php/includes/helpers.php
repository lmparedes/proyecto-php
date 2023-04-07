<?php 
    function MostrarError($errores, $campo){
        $alerta = '';
        if(isset($errores[$campo]) && !empty($campo)){
            $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
        }
    return $alerta;
    }

    /*function BorrarErrores(){
        $_SESSION['errores'] = null;
        $borrado = session_unset($_SESSION['errores']);
    return $borrado;
    }*/

    function conseguirCategorias($conexion){
        $sql = "SELECT * FROM categorias ORDER BY id ASC;";
        $categorias = mysqli_query($conexion, $sql);
        $result = array();
        if($categorias && mysqli_num_rows($categorias) >= 1){
            $result = $categorias;
        }
        return $result;
    }

    function conseguirUltimasEntradas($conexion){
        $sql = "SELECT e.* FROM entradas e
                INNER JOIN categorias c on c.id = e.categoria_id
                ORDER BY e.id DESC LIMIT 4";
        $entradas = mysqli_query($conexion, $sql);
        $result = array();
        if($entradas && mysqli_num_rows($entradas) >= 1){
            $result = $entradas;
        }
        return $entradas;
    }
?>