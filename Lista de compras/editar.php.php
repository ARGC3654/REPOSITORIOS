<?php
include("conexion.php");
$con = connection();

$id = $_GET['id'];
$sql = "SELECT * FROM productos WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];
    
    $sql = "UPDATE productos SET nombre='$nombre', cantidad='$cantidad', estado='$estado' WHERE id='$id'";
    $query = mysqli_query($con, $sql);
    
    if($query) {
        header("location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center mb-4">Editar Producto</h1>
                
                <form action="editar.php?id=<?= $id ?>" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $row['nombre'] ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" value="<?= $row['cantidad'] ?>" required min="1">
                    </div>
                    
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="Faltante" <?= ($row['estado'] == 'Faltante') ? 'selected' : '' ?>>Faltante</option>
                            <option value="Comprado" <?= ($row['estado'] == 'Comprado') ? 'selected' : '' ?>>Comprado</option>
                            <option value="No se encontró" <?= ($row['estado'] == 'No se encontró') ? 'selected' : '' ?>>No se encontró</option>
                        </select>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
