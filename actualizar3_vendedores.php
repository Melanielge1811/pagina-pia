<link rel="stylesheet" type="text/css" href="pia.css">
<?php
$con= mysqli_connect("localhost","root","","cosmeticos");
if(!$con)
{
	die('no se establecio conexion con el servidor' . mysqli_error());
}
$v1=$_POST['clave_p'];
$v2=$_POST['nombre_p'];
$v3=$_POST['telefono_p'];
$v4=$_POST['correo_p'];
$v5=$_POST['clavec_p'];
	$sql="UPDATE proveedores SET clave_p='$v1',nombre_p='$v2',telefono_p='$v3',correo_p='$v4',clavec_p='$v5' WHERE clave_p='$v1'";
	if(!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
	{
		die('error: ' .mysqli_error($con));
	}
	echo"<center>";
	echo"1 vendedor actualizado<br>";
	echo"<a href=actualizar_vendedores.php>ver registros</a>";
	mysqli_close($con);
?>	