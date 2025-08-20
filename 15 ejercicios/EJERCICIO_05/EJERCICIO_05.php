<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 05</title>
  </head>
  <body>
    <h1>Sistema de verificación de pago de impuestos</h1>
    <form method="post">
      <h2>Por favor ingrese su edad</h2>
      <div class="Edad"><input type="number" name="edad" id="" /></div>

      <h2>Por favor ingrese sus ingresos mensuales</h2>
      <div class="Ingreso"><input type="number" name="ingresos" id="" /></div>

      <div class="space"><input type="submit" value="CONFIRMAR" /></div>
    </form>
<?php
if( $_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["edad"], $_POST["ingresos"]) &&
is_numeric($_POST["edad"]) && is_numeric($_POST["ingresos"])){
  
$Edad = $_POST["edad"];
$Ingresos = $_POST["ingresos"];

if($Edad > 16 && $Ingresos >= 1000 ){
echo '<p class = "mensajeM">Usted debe de pagar impuestos.</p>';
}else {
 echo '<p class = "mensajeB">Usted no esta obligado a pagar impuestos.</p>';
}
}
?>
  </body>
</html>