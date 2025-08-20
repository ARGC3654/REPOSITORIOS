<?php 


include ("conexion.php");
$usuario = $_POST ['usuario'];
$clave = $_POST ['clave'];

$sql = "SELECT * FROM USER WHERE usuario = '$usuario' AND clave = '$clave '";

$result = mysqli_query($conn , $sql);
if (mysqli_nums_rows($result )>0){

header ("location: bienvenido.php");
exit();



}else{

echo "USUARIO Y CONTRASENIA INCORRECTOS";



}



?>