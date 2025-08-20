<?php   
function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud";
    $port = 3307;
    // Conexión
    $connect = mysqli_connect($host, $user, $pass, $db, $port);
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $connect;
}
?>