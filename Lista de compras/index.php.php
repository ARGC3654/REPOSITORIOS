<?php  
include("conexion.php");
$con = connection();

$sql = "SELECT * FROM productos"; // Cambia 'productos' por el nombre de tu tabla
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Compras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Compras</h1>
        <a href="insertar_producto.php" class="btn btn-primary">Agregar Producto</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['producto']; ?></td>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['estado']; ?></td>
                    <td>
                        <a href="editar_producto.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="eliminar_producto.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>
