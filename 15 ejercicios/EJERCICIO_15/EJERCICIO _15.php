<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>EJERCICIO 15</title>
  </head>
  <body>
    <h1>Sistema de calculo de pago por horas trabajadas</h1>
    <form method="post">
      <h2>Ingrese número de horas trabajadas</h2>
      <div class="Horas">
        <input type="number" name="horas" id="" />
      </div>

      <h2>Ingrese valor por hora trabajada</h2>
      <div class="Valor">
        <input type="number" name="valor" id="" />
      </div>

      <div class="Confirmar">
        <input type="submit" value="CONFIRMAR" id="" />
      </div>
    </form>
<?php    
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["horas"], $_POST["valor"])) {
    $HORAS = $_POST["horas"];
    $VALOR = $_POST["valor"];

    $PAGO = $HORAS * $VALOR;

    echo '<p class="mensaje">El pago total por las ' . $HORAS . ' horas trabajadas es de: ' . $PAGO . '$</p>';
}
?>
  </body>
</html>