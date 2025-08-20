<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 03</title>
  </head>
  <body>
    <h1>División de 2 números</h1>
    <form method="post">
      <h2>Ingrese primer dato</h2>
      <div class="Nu1"><input type="number" name="Num1" id="" /></div>
      <h2>Ingrese segundo dato</h2>
      <div class="Nu2"><input type="number" name="Num2" id="" /></div>

      <div class="space"><input type="submit" value="DIVIDIR" /></div>
    </form>

    <?php
if( $_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Num1"], $_POST["Num2"]) &&
is_numeric($_POST["Num1"]) && is_numeric($_POST["Num2"])){

$Dato1 = $_POST["Num1"];
$Dato2 = $_POST["Num2"];

if($Dato2 == 0){
echo '<p class = "mensajeE">ERROR.</p>';
echo '<p class = "mensajeER">No es posible realizar esta división.</p>';
}else{
    $result = $Dato1 / $Dato2;
   echo '<p class = "mensaje">El resultado de la división es: ' .$result.'</p>';
}
}
?>
  </body>
</html>