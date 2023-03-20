<?php 
    if(isset($_POST)){
        require_once 'includes/conexion.php';
    if(!isset($_SESSION)){
        session_start();
    }
        //Recoger valores del formulario de registro
        $nombre = isset($_POST['nombre']) ? mysqli_scape_string($_POST['nombre']) : false;
        $apellidos = isset($_POST['apellidos']) ? mysqli_scape_string($_POST['apellidos']) : false;
        $email = isset($_POST['email']) ? mysqli_scape_string($_POST['email']) : false;
        $password = isset($_POST['password']) ? mysqli_scape_string($_POST['password']) : false;

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
         //validar el email
        
        if(!empty($password)){
            $password_validado = true;
        }else{
            $password_validado = false;
            $errores['password'] = 'La contraseña esta vacia';
        }
        $guardar_usuario = true;

        if(count($errores) == 0){
            $guardar_usuario = true; 
            //CIFRAR CONTRASEÑA
            $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
            //INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
            $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
            $guardar = mysqli_query($db, $sql);

            //var_dump(mysqli_error($db));
            //die();
            
            if($guardar){
                $_SESSION['completado'] = "El registro se ha completado con exito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
            }
        }else{
            $_SESSION['errores'] = $errores;
        }
    }
    header('location: index.php');
?>