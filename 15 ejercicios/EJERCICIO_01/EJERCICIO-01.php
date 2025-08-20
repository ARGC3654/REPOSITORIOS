<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" type="text/css" href="style.css">
    <title>EJERCICIO 01</title>
  </head>
  <body>
    <h1>Ingrese su edad</h1>
    <form method="post">
      <div class="edad"><input type="number" name="Edad" id="" /></div>
              
      <div class="space"><input type="submit" value="Confirmar" /></div>
    </form>

<?php

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Edad"]) && is_numeric($_POST["Edad"])){
 
$dato = $_POST["Edad"];

if($dato <= 0 || $dato > 100 ){
   echo '<p class = "mensaje_error">Ingrese una edad válida.</p>';
}else if ($dato >= 18){
    echo '<p class = "mensajeV">Usted es mayor de edad.</p>';
}else if($dato < 18){
    echo '<p class = "mensajef">Usted es menor de edad.</p>';
}
}
?>
  </body>
</html>