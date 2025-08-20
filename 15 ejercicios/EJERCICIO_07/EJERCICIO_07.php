<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 07</title>
  </head>
  <body>
    <h1>Por favor ingrese su edad actual</h1>
    <form method="post">
      <div class="Edad"><input type="number" name="edad" id="" /></div>

      <div class="Space"><input type="submit" value="CONFIRMAR" id="" /></div>
    </form>
    <?php
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["edad"]) && is_numeric($_POST["edad"])){

$DATO = $_POST["edad"];

for ($i=1; $i <=$DATO ; $i++) { 
echo '<p class = "mensaje1">Año: ' .$i. '</br></p>';
}
echo '<p class = "mensaje2">Usted ha vidido un total de : ' .$DATO. ' años</p>';
}
?>
  </body>
</html>