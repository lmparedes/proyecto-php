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
?>