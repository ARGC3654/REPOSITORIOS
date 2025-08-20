<?php


$COMPUS = 650
$FORMAs_pago = "FORMAS DE PAGO";

switch ($FORMAs_pago) {


    case "TARJETA":

        <?php
/
$numero = readline("Ingresa la cantidad de computadoras a comprar: ");

if ($numero  > 1 ) {
    

    $numero % 18 ; 
echo "EL COSTO ES DE 650:"
    echo "EL COBRO FUE DE: ".$numero;


} else {
  
  echo "EL COBRO FUE DE: ".$numero;
    
}
     


break;
    case "efectivo":
    

        <?php
/
$numero = readline("Ingresa la cantidad de computadoras a comprar: ");

if ($numero  > 1 ) {
    

    $numero % 25 ; 

    echo "COSTO es de 65o: ". $numero;
    echo "EL COBRO FUE DE: ".$numero;


} else {
  
  echo "EL COBRO FUE DE: ".$numero;
    
}
     
    

   break;
    default:
        echo "ERROR";

?>