<?php

$usuario_valido = "admin";
$contras_valida = "1234";

$username = $_POST["user"] ??"";
$password = $_POST["password"] ??"";

//validacion
if ($username === $usuario_valido && $password == $contras_valida) {
    //guarda el nombre de usuario en la sesion
    session_start();
    $SESION ['user'] = $username;
    header ('location: bienvenido.php');
    exit();
} else {
    echo "Usuario o contraseña incorrectos";
}
?>