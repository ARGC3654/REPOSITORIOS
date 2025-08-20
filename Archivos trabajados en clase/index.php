<?php
include("connection.php");

$con = connection();
$sql = "SELECT * FROM personas";
$query = mysql_query($con, $sql);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <FORM
            action=""method="post">
            <input type="text" name= "name" placeholder="Nombre">
            <input type="text" name= "lastname" placeholder="Apellido">
            <input type="text" name= "username" placeholder="Usuario">
            <input type="text" name= "password" placeholder="Contraseña">
            <input type="text" name= "email" placeholder="Correo">

            <input type="aubmit" value ="Agregar usuario">

        </FORM>
    </div>
    <h2>Usuario de tabla</h2>
<table>
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>APELLIDO</th>
    <th>CLAVE</th>
    <th>CORREO</th>
    </tr>

    <tbody>
        <?php while ($row = mysqli_fetch_array($query)): ?>

        <tr>
            <th> <?=$row['id']?> </th>
            <th> <?=$row['name']?> </th>
            <th> <?=$row['apellido']?> </th>
            <th> <?=$row['usuario']?> </th>
            <th> <?=$row['clave']?> </th>
            <th> <?=$row['email']?> </th>


            <td> <a href="update.php" class="btn btn-sm btn-warning">Editar</a></td>
            <td> <a href="delete.php" class="btn btn-sm btn-danger">Editar</a></td>
    
        </tr>

        <?php endwhile;?>
    </tbody>
</table>
</div>

</body>
</html>