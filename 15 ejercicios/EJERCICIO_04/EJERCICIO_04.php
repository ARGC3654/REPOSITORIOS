<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 04</title>
  </head>
  <body>
    <h1>Por favor ingrese un número</h1>
    <form method="post">
      <div class="Número"><input type="number" name="Num" id="" /></div>

      <div class="space"><input type="submit" value="CONFIRMAR" /></div>
    </form>

    <?php
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Num"]) && is_numeric($_POST["Num"])){

$DATO = $_POST["Num"];

if($DATO % 2 == 0){
echo '<p class = "mensajeV">El número ingresado es par.</p>';
}else{
    echo '<p class = "mensajeF">El número ingresado es impar.</p>';
 }
}
?>
  </body>
</html>