?php

include ("connection.php");
$con = connection();
$id = $_GET ['id'];

$sql = "DELETE FROM persona WHERE id = '$id'";
$elin = myqli_query = ($con, $sql);

if ($elin)

    header ("Location : index.php")

}

<?