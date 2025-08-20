<?php

$num1 = $_POST ["NUMERO 1 "];
$num2 = $_POST ["NUMERO 2 "];

if ($num1 % 2 == 0) {
        return "par". $num1;
    } else {
        return "impar".$num1;
    }
}

if ($num2 % 2 == 0) {
        return "par".$num2;
    } else {
        return "impar".$num2;
    }
}

?>