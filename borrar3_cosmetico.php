<link rel="stylesheet" type="text/css" href="pia.css">
<?php
$con= mysqli_connect("localhost","root","","cosmeticos");
if(!$con)
{
	die('No se establecio la conexion con el servidor:' .mysqli_error($con));
}
$sql="DELETE FROM articulos WHERE CLAVE_C='{$_POST["clave_c"]}'";
IF (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)){
	die('Error: '.mysqli_error($con));
	}
	echo"<center>";
	echo"Registro eliminado<br>";
	echo"<a href=borrar_cosmeticos.php>ver registros</a>";
	mysqli_close($con);
?>	