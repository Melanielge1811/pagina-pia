<link rel="stylesheet" type="text/css" href="pia.css">
<?php
$con= mysqli_connect("localhost","root","","cosmeticos");
if(!$con)
{
	die('no se establecio conexion con el servidor' . mysqli_error());
}

	$sql="INSERT INTO venta
	VALUES('$_POST[clave_v]','$_POST[clavec_v]','$_POST[cantidadc_v]','$_POST[total_v]')";
	if(!mysqli_query($con,$sql,MYSQLI_USE_RESULT))
	{
		die('error: ' .mysqli_error($con));
	}
	echo"<center>";
	echo"1 venta agregada<br>";
	echo"<a href=ventas.php>ver registros</a>";
	mysqli_close($con);
?>