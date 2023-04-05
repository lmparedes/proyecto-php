<?php 
//iniciar la sesion y y la conexion a la bd
require_once 'includes/conexion.php';
session_start();

if(isset($_POST)){
    //Borrar error antiguo
     /*if(isset($_SESSION['error_login'])){
             session_unset($_SESSION['error_login']);
            }*/
    //Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //Consulta  para comprobar las credenciales del usuario 
    $sql = "select * from usuarios where email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);

        //Comprobar la contraseña /cifrar
        $verify = password_verify($password, $usuario['password']);
        if($verify){
            //utilizar una sesion para guardar los datos del usuario logeado
            $_SESSION['usuario'] = $usuario;
        }else{
            //Si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = "Login incorrecto!!";
        }
    }else{
            //Si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = "Login incorrecto!!";
    }
}
header('Location: index.php');
?>