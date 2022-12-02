<link rel="stylesheet" type="text/css" href="pia.css">
<?php
$con= mysqli_connect("localhost","root","","cosmeticos");
if(!$con)
{
	die('no se establecio conexion con el servidor' . mysqli_error());
}

	$sql="INSERT INTO proveedores
	VALUES('$_POST[clave_p]','$_POST[nombre_p]','$_POST[telefono_p]','$_POST[correo_p]','$_POST[clavec_p]')";
	if(!mysqli_query($con,$sql,MYSQLI_USE_RESULT))
	{
		die('error: ' .mysqli_error($con));
	}
	echo"<center>";
	echo"1 vendedor agregado<br>";
	echo"<a href=proveedores.php>ver registros</a>";
	mysqli_close($con);
?>