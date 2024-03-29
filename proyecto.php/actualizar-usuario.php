<?php 
    if(isset($_POST)){
        require_once 'includes/conexion.php';
        //Recoger valores del formulario de registro
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
        $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
        $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
        $usuario_id = $_SESSION['usuario']['id'];
        //Array de errores
        $errores = array();

        //validar los datos antes de guardarlos en la base de datos 
        //validar nombre
        
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("[0-9]", $nombre)){
            $nombre_validado = true; 
        }else{
            $nombre_validado = false;
            $errores['nombre'] = 'El nombre no es valido';
        }

        //validar apellidos
        
        if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("[0-9]", $apellidos)){
            $apellidos_validado = true;
        }else{
            $apellidos_validado = false;
            $errores['apellidos'] = 'Los apellidos no son valido';
        }
        //validar el email
        
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_validado = true;
        }else{
            $email_validado = false;
            $errores['email'] = 'El email no es valido';
        }

        $guardar_usuario = true;

        if(count($errores) == 0){
            $guardar_usuario = true; 
        //comprobar si el email ya existe
        $sql = "SELECT id, email from usuarios where email = '$email';";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);
        
        if($isset_user['id'] == $usuario_id || empty($isset_user)){ 
            //ACTUALIZAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
            $sql = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellidos', email = '$email' 
            where id = $usuario_id;";
            $guardar = mysqli_query($db, $sql);

            //var_dump(mysqli_error($db));
            //die();
            
            if($guardar){
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = "Tus datos se han actualizado con exito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al actualizar el usuario!!";
            }
        }else{
                $_SESSION['errores']['general'] = "El usuario ya existe!!";
        }    
        }else{
            $_SESSION['errores'] = $errores;
        }
    }
    header('location: index.php');
?>