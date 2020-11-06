<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dbtodos";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["usuario"];
$pass = $_POST["password"];

$query = mysqli_query($conn,"SELECT * FROM beneficiario WHERE Correo = '".$nombre."' and Password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header('Location:Principal.html');
	//echo "Bienvenido:" .$nombre;
}
else if($nr==0){
$query = mysqli_query($conn,"SELECT * FROM donante WHERE Correo = '".$nombre."' and Password = '".$pass."'");
$nr = mysqli_num_rows($query);

	if($nr == 1)
{
	header('Location:Principal.html');
	//echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	header("Location: loginUsuiario.php");
	//echo "No ingreso"; 
}
	
}



?>