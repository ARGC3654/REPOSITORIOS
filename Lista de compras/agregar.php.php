<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include("conexion.php");
    $con = connection();
    
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];
    
    $sql = "INSERT INTO productos (nombre, cantidad, estado) VALUES ('$nombre', '$cantidad', '$estado')";
    $query = mysqli_query($con, $sql);
    
    if($query) {
        header("location: index.php");
    } else {
        echo "Error al agregar producto";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center mb-4">Agregar Producto</h1>
                
                <form action="agregar.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" required min="1">
                    </div>
                    
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="">Seleccione un estado</option>
                            <option value="Faltante">Faltante</option>
                            <option value="Comprado">Comprado</option>
                            <option value="No se encontró">No se encontró</option>
                        </select>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Agregar Producto</button>
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
