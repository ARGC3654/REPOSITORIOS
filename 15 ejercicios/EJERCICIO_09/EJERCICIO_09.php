<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 09</title>
  </head>
  <body>
    <h1>Por favor ingrese un número entero positivo</h1>
    <form method="post">
      <div class="Dato"><input type="number" name="número" id="" /></div>

      <div class="Space"><input type="submit" value="CONFIRMAR" id="" /></div>
    </form>
<?php

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["número"]) && is_numeric($_POST["número"])){
  
$DATO = $_POST["número"];

echo '<p class = "mensaje1">La cuenta regresiva desde el número ' . $DATO. ' hasta el 0 es:</p>';

for ($i=$DATO; $i >= 0 ; $i--) { 
    echo '<span class = "mensaje2">'. $i . ',</span>';
  }
}
?>
  </body>
</html>