<?php

include ("connection.php");
$con = connection();
$sql = "SELECT * FROM persona";
$query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>


<div>
<form action = "" method = "post">

<input type = "text" name ="name" placeholder = "Nombre">
<input type = "text" name ="lastname" placeholder = "Apellido">
<input type = "text" name ="username" placeholder = "Usuario">
<input type = "text" name ="password" placeholder = "contraseña">
<input type = "text" name ="email" placeholder = "Correo">

<input type ="submit" value = "Agregar usuario">

</form>
</div>

<div>
<h2>Usuario de tabla</h2>

<table>
  <tr>

      <th>ID</th>
      <th>NAME</th>
      <th>APELLIDO</th>
      <th>USUARIOS</th>
      <th>CLAVE</th>
      <th>CORREO</th>

   </tr>

<body>
    <?php while ($row = myqli_fetch_array ($query)):?>

<tr>
<th><?php = $row ['id']?> </th>
<th><?php = $row ['name']?> </th>
<th><?php = $row ['apellido']?> </th>
<th><?php = $row ['usuario']?> </th>
<th><?php = $row ['clave']?> </th>
<th><?php = $row ['email']?> </th>
</tr>


<?php endwhile; ?>
</body>

</table>
</div>
</body>
</html>