<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario con Base de datos </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"></link>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="md-4"> Guardar en Base de Datos </h2>
        <form action="guardar_bd.php" method= "POST" class= "needs-validation" novalidate>
            <div class= "mb-3">
                <label for="Nombre" class="form-label"> Nombre </label>
                <input type="text" name= "Nombre" id= "Nombre" class= "form-control" required>
                <div class="invalid-feedback">Escribe su Nombre. </div>
            </div>

            <div class = "mb-3">
                <label for="correo" class="form-label"> Correo </label>
                <input type="email" name= "correo" id= "correo" class= "form-control" required>
                <div class="invalid-feedback"> Correo invalido. </div>
            </div>

            <button type= "submit" class= "btn btn-primary"> Enviar </button>
        </form>
    </div>
</body>
</html>