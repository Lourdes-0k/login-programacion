<?php
$conexion = new mysqli ("localhost", "root","", "pruebas");
if($conexion -> connect_error) {
    die("conexion invalida: " . $conexion -> connect_error);
}

$nombre = $conexion -> real_escape_string ($_POST['Nombre']);
$correo = $conexion -> real_escape_string ($_POST['correo']);
$sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre','$correo')";
if($conexion -> query($sql) === TRUE) {
    header("Location: ver_usuarios_bd.php");
} else {
    echo "<div class = 'alert alert_danger'> Error: " . $conexion -> error . "</div>";
}
$conexion ->close();
?>