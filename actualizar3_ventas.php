<link rel="stylesheet" type="text/css" href="pia.css">
<?php
$con= mysqli_connect("localhost","root","","cosmeticos");
if(!$con)
{
	die('no se establecio conexion con el servidor' . mysqli_error());
}
$v1=$_POST['clave_v'];
$v2=$_POST['clavec_v'];
$v3=$_POST['cantidadc_v'];
$v4=$_POST['total_v'];
	$sql="UPDATE venta SET clave_v='$v1',clavec_v='$v2',cantidadc_v='$v3',total_v='$v4' WHERE clave_v='$v1'";
	if(!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
	{
		die('error: ' .mysqli_error($con));
	}
	echo"<center>";
	echo"1 venta actualizada<br>";
	echo"<a href=ventas.php>ver registros</a>";
	mysqli_close($con);
?>	