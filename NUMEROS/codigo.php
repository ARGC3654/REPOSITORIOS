 <?php

$numero1 = 10; //variable definida para enteros 
$numero2 = 20;


if ($numero1 > $numero2) {  // sentencia de mayor o menor
    echo "El número mayor es: " . $numero1;
} elseif ($numero2 > $numero1) {
    echo "El número mayor es: " . $numero2;
} else {
    echo "Ambos números son iguales.";
}
?>