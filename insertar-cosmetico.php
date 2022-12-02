<link rel="stylesheet" type="text/css" href="pia.css">
<?php
$con= mysqli_connect("localhost","root","","cosmeticos");
if(!$con)
{
	die('no se establecio conexion con el servidor' . mysqli_error());
}

	$sql="INSERT INTO articulos
	VALUES('$_POST[clave_c]','$_POST[producto_c]','$_POST[cantidad_c]','$_POST[precio_c]')";
	if(!mysqli_query($con,$sql,MYSQLI_USE_RESULT))
	{
		die('error: ' .mysqli_error($con));
	}
	echo"<center>";
	echo"1 articulo agregado<br>";
	echo"<a href=articulos.php>ver registros</a>";
	mysqli_close($con);
?>