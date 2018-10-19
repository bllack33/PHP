<?php
session_start();
    $page_Title = 'Resultado de Insertar Registro en Tabla Clientes';

    require ('includes/clases.php'); 
    $_SESSION['error'] = "";
    $_SESSION['mensaje'] = "";
    $usuario = $_POST['user'];
    $contraseña = $_POST['password'];
    $primer_nombre = $_POST['firstname'];
    $segundo_nombre = $_POST['secondname'];
    $primer_apellido = $_POST['lastname1'];
    $segundo_apellido = $_POST['lastname2'];
    $email = $_POST['email'];

    $_SESSION['usuario'] = $usuario;

    //Validar usuario
    $consultarUsuario = new Registro();
    $consultarUsuario->consultarUsuario($email);

    if($consultarUsuario->estado != "OK"){
        $insertarRegistroBD = new Registro();
        $insertarRegistroBD->registro_usuario($usuario,$contraseña,$primer_nombre,$segundo_nombre,$primer_apellido,$segundo_apellido,$email);
        $_SESSION['mensaje'] = "Usuario creado correctamente";
    }else{
        $_SESSION['error'] = "El usuario con el correo <strong>$email</strong> ya existe";
    }      


    header('Location: registro.php');
?>