<?php
$con= mysqli_connect("localhost","root","","cosmeticos");
if(!$con)
{
	die('no se establecio conexion con el servidor' . mysqli_error());
}
$v1=$_POST['clave_c'];
$v2=$_POST['producto_c'];
$v3=$_POST['cantidad_c'];
$v4=$_POST['precio_c'];
	$sql="UPDATE articulos SET clave_c='$v1',producto_c='$v2',cantidad_c='$v3',precio_c='$v4' WHERE clave_c='$v1'";
	if(!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
	{
		die('error: ' .mysqli_error($con));
	}
	echo"<center>";
	echo"1 registro actualizado<br>";
	echo"<a href=actualizar_cosmetico.php>ver registros</a>";
	mysqli_close($con);
?>	