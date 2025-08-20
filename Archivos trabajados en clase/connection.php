<?php
function connection(){
 $host="localhost";
 $user="root";
 $pass="";
 $db="crud";
 $port = 3307;

 //metodo
 $connect=mysqli_connect($host, $user,$pass,$db, $port);

 mysqli_select_db($connect,$db);
 return $connect;
}
?>