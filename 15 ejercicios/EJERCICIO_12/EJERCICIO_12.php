<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 12</title>
  </head>
  <body>
    <h1>Presione el botón</h1>

    <form method="post">
      <div class="Button"><input type="submit" value="CONFIRMAR" id="" /></div>
    </form>
<?php
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $TXT = "¡Hola, mundo!";
        echo '<div class="mensaje">' . $TXT . '</div>';
 }
?>
  </body>
</html>