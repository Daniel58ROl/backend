<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="dbtodos";
$db_table_name1="beneficiario";
$db_table_name2="donante";
$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}

$Nombre = strtoupper($_POST['Nombre']);
$Calle = strtoupper($_POST['Calle']);
$Municipio = strtoupper($_POST['Municipio']);
$Ciudad = strtoupper($_POST['Ciudad']);
$Estado = strtoupper($_POST['Estado']);
$CP = utf8_decode($_POST['CP']);
$Telefono = utf8_decode($_POST['Telefono']);
$Correo = utf8_decode($_POST['Correo']);
$Contraseña = utf8_decode($_POST['Contraseña']);
$Contraseña2=utf8_decode($_POST['Contraseña2']);
$TipoUsuario = utf8_decode($_POST['TipUsuario']);
//$TipoUsuario="Beneficiario";
//echo $Correo;

//$resultado = mysqli_query($db_connection, "SELECT * FROM ".$db_table_name." Correo = '".$Correo."'");

//if (mysqli_num_rows($resultado)>0)
//{
	//header('Location: Fail.html');

	
	
//}

					
					

//else
//{
if($TipoUsuario=="Donante")
{
	if($Contraseña==$Contraseña2)
	{
		//if()
	$insert_value = 'INSERT INTO `'.$db_table_name2.'` (`Nombre` , `Calle`, `Localidad`, `Ciudad` , `Estado`, `CP`, `Telefono`, `Correo`, `Password`, `TipoUsuario`) VALUES ("'.$Nombre.'", "'.$Calle.'", "'.$Municipio.'", "'.$Ciudad.'", "'.$Estado.'", "'.$CP.'", "'.$Telefono.'", "'.$Correo.'", "'.$Contraseña.'", "'.$TipoUsuario.'")';

	$retry_value = mysqli_query($db_connection, $insert_value);
	
	if (!$retry_value) 
	{
	 header('Location: FailCorreo.php');
	}
	
	else
	{
		mysqli_query($db_connection, $insert_value);
	}
	
	header('Location: Success.php');
}
else{
	
	echo "La Contraseña no es igual";
	header('Location: Fail.php');
}
}
else{
	if($Contraseña==$Contraseña2)
	{
		//if()
	$insert_value = 'INSERT INTO `'.$db_table_name1.'` (`Nombre` , `Calle`, `Localidad`, `Ciudad` , `Estado`, `CP`, `Telefono`, `Correo`, `Password`, `TipoUsuario`) VALUES ("'.$Nombre.'", "'.$Calle.'", "'.$Municipio.'", "'.$Ciudad.'", "'.$Estado.'", "'.$CP.'", "'.$Telefono.'", "'.$Correo.'", "'.$Contraseña.'", "'.$TipoUsuario.'")';

	$retry_value = mysqli_query($db_connection, $insert_value);
	
	if (!$retry_value) 
	{
	 header('Location: FailCorreo.php');
	}
	
	else
	{
		mysqli_query($db_connection, $insert_value);
		header('Location: Success.php');
	}
	
	
}
else{
	
	echo "La Contraseña no es igual";
	header('Location: Fail.php');
}
	
	
	
}
mysql_close($db_connection);
?>