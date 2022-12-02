<link rel="stylesheet" type="text/css" href="pia.css">
<?php
$con= mysqli_connect("localhost","root","","cosmeticos");
if(!$con)
{
	die('No se establecio la conexion con el servidor:' .mysqli_error($con));
}
$sql="DELETE FROM proveedores WHERE clave_p='{$_POST["clave_p"]}'";
IF (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)){
	die('Error: '.mysqli_error($con));
	}
	echo"<center>";
	echo"Vendedor eliminado<br>";
	echo"<a href=proveedores.php>ver registros</a>";
	mysqli_close($con);
?>	