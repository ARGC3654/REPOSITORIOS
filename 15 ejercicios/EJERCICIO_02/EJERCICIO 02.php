<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 02</title>
  </head>
  <body>
    <h1>Por favor ingrese la contraseña correspondiente</h1>
    <form method="post">
      <div class="Contraseña"><input type="text" name="Contra" id="" /></div>

      <div class="space"><input type="submit" value="Confirmar" /></div>
    </form>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Contra"])){

$contra = $_POST["Contra"];

if($contra == "1234contra" || $contra == "1234CONTRA" ){
   echo '<p class = "mensaje">Contraseña Correcta.</p>';
   echo '<p class = "mensaje2">BIENVENIDO.</p>';
}else{
    echo '<p class = "mensaje_error">Contraseña incorrecta.</p>';
}
}
?>
  </body>
</html>