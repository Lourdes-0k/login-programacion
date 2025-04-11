<?php
$usuario_valido = "admin";
$contras_valida = "1234";

$username = $_POST['user'] ?? " ";
$password = $_POST['password'] ?? " ";

if($username === $usuario_valido && $password === $contras_valida) {
    echo "Login exitoso";
} else {
    echo " Usuario o contraseña incorrectos";
}
?>