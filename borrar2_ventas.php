<link rel="stylesheet" type="text/css" href="pia.css">
<?php
$con= mysqli_connect("localhost","root","","cosmeticos");
if(!$con)
{
	die('No se establecio la conexion con el servidor:' .mysqli_error($con));
}
$sql="DELETE FROM venta WHERE clave_v='{$_POST["clave_v"]}'";
IF (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)){
	die('Error: '.mysqli_error($con));
	}
	echo"<center>";
	echo"Venta eliminada<br>";
	echo"<a href=ventas.php>ver registros</a>";
	mysqli_close($con);
?>	