<? 
include ("connection.php");
$con = connection();

$id = $_POST['id'];
$name= $_POST['name '];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$clave = $_POST['clave'];
$ = $_POST['email'];


$qsl = "UPDATE persona SET NAME = '$name', lastmame = '$lastname', usermane = '$username', $clave = 'clave ', $email = 'email' where id = 'id'  "

$query = mysqli_query ($con, $sql);

if ($query)

header ("Location : index.php");



}

?>