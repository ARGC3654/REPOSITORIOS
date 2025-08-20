<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 06</title>
  </head>
  <body>
    <h1>Por favor ingrese una palabra</h1>
    <form method="post">
      <div class="Texto"><input type="text" name="palabra" id="" /></div>

      <div class="Space"><input type="submit" value="CONFIRMAR" id="" /></div>
    </form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["palabra"]) && !empty(trim($_POST["palabra"]))){
$Word = $_POST["palabra"];
$cont = 0; 
for($i=0; $i < 10; $i++){ 
    $cont = $cont + 1;
    echo '<p class = "mensaje"> </br> ' . $cont . '.' . $Word.'</p>';
  }
}
?>
  </body>
</html>