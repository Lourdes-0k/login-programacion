<?php
$conexion = new mysqli ("localhost", "root","", "pruebas");
if($conexion -> connect_error) {
    die("conexion invalida" . $conexion -> connect_error);
}
$resultados = $conexion -> query("SELECT * FROM usuarios ORDER BY creado_en DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - Base de Datos </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class = "bg-light">
<div class="container mt-5">
<Table class = "table table-bordered mt-4">
  <thead>
    <tr>
      <th class="col"> ID </th>
      <th class="col"> Nombre </th>
      <th class="col"> correo </th>
      <th class="col"> Fecha </th>
      <th class="col"> Acciones </th>
    </tr>
  </thead>
  <tbody>
    <?php while ($fila = $resultados->fetch_assoc()) : ?>
    <tr>
      <td> <?= $fila ['id']?></td>
      <td> <?= htmlspecialchars($fila ['Nombre'])?></td>
      <td> <?= htmlspecialchars($fila ['correo'])?></td>
      <td> <?= $fila ['creado_en']?></td>
      <td>
        <a href="eliminar_usuarios_bd.php?id=<?= $fila ['id']?>" class= "btn btn-sm btn-danger" onclick= "return confirm ('¿Deseas eliminar este registro?')"> Eliminar </a>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</Table>
</body>
</html>
<?php $conexion ->close(); ?>