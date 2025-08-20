<?php 

include ("connection.php");

$con = connection();
$id = $get ['$id'];
$sql = "SELECT * FROM persona WHERE id = '$id'";
$query = myqli_query ($con,$sql);
$row = mysqli_fetch_array ($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">

    <!-- Formulario -->
    <div class="card mb-4">
        <div class="card-header">
            <h4>Agregar Usuario</h4>
        </div>
        <div class="card-body">
            <form action="insertar_crud.php" method="post" class="row g-3">
                <div class="col-md-3">
                    <input type="text" name="name" class="form-control" placeholder="Nombre">
                </div>
                
                <imput type = "hidden" name = "id" value = "" <>             
                <div class="col-md-3">
                    <input type="text" name="lastname" class="form-control" placeholder="Apellido">
                </div>
                <div class="col-md-3">
                    <input type="text" name="username" class="form-control" placeholder="Usuario">
                </div>
                <div class="col-md-3">
                    <input type="text" name="password" class="form-control" placeholder="Contraseña">
                </div>
                <div class="col-md-3">
                    <input type="text" name="email" class="form-control" placeholder="Correo">
                </div>
                <div class="col-6">
                    <input type="submit" value="Agregar Usuario" class="btn btn-primary w-100">
                </div>
            </form>
        </div>
    </div>

<!-- Bootstrap JS (opcional si no usas componentes interactivos) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>