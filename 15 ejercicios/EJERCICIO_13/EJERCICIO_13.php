<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EJERCICIO 13</title>
</head>
<body>
    <h1>Por favor ingrese su nombre</h1>
    <form method="post">
    <div class = "Text"><input type = "text" name = "Nombre" id = ""/><div>

    <div class = "Space"><input type = "submit" value = "CONFIRMAR" id = ""/><div> 
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Nombre"]) && $_POST["Nombre"] !== "") {
        $NAME = $_POST["Nombre"];
        echo '<p class="mensaje">¡Hola ' . $NAME . '!</p>';
}
?>
</body>
</html>