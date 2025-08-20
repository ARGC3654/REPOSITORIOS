<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 10</title>
  </head>
  <body>
    <h1>Calculo de inversión</h1>
    <form method="post">
      <h2>Ingrese cantidad a invertir</h2>
      <div class="Inversión"><input type="number" name="cantidad" id="" /></div>

      <h2>Ingrese porcentaje de interés anual (decimales)</h2>
      <div class="Interés">
        <input type="number" step="any" name="anual" id="" />
      </div>

      <h2>Ingrese duración de inversión (años)</h2>
      <div class="Duración"><input type="number" name="años" id="" /></div>

      <div class="Space"><input type="submit" value="CALCULAR" id="" /></div>
    </form>
<?php

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cantidad"], $_POST["anual"], $_POST["años"]) &&
is_numeric($_POST["cantidad"]) && is_numeric($_POST["anual"]) && is_numeric($_POST["años"])){
  
$DINERO = $_POST["cantidad"];
$PORCEN = $_POST["anual"];
$DURAC = $_POST["años"];

for ($i=1; $i <= $DURAC ; $i++) {
    $CAP = $DINERO * (1+$PORCEN)**$i;
    echo '<p class = "mensaje">El capital del año ' . $i. ' es de: ' .$CAP. '$</p>';
 }
}
?>
  </body>
</html>