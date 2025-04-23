<?php
$conexion = new mysqli ("localhost", "root","", "pruebas");
if($conexion -> connect_error) {
    die("conexion invalida" . $conexion -> connect_error);
}
$id = intval($_GET['id']);
$conexion -> query("DELETE FROM usuarios where id = $id");
$conexion ->close();
header("Location: ver_usuarios_bd.php");
?>