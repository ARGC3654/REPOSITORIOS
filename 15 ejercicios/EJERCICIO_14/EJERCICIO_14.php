<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 14</title>
  </head>
  <body>
    <h1>Presione confirmar para resolver la siguiente operación aritmética</h1>
    <h2>(3 + 2)(2²)</h2>
    <form action="EJERCICIO 14.php" method="post">
      <div class="Confirmar">
        <input type="submit" value="CONFIRMAR" id="" />
      </div>
    </form>
<?php
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $RES = (3 + 2) * (2) ** 2;
        echo '<p class="mensaje">El resultado de la operación es: ' . $RES . '</p>';
 }
?>
  </body>
</html>