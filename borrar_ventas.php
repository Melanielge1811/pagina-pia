<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="pia.css">
	<meta charset="utf-8"/>
	<style type="text/css">
		
	</style>

</head>

	<<?php
	$con = mysqli_connect("localhost","root","","cosmeticos");
	$resultado = mysqli_query($con, "select * from venta");
	if($resultado === FALSE) {
		echo "fallo";
		die(mysqli_error());
	}
	echo "<font size=4 face=Bodoni MT Black>";

	echo "<h1>Consulta de la tabla Ventas
	</h1>";
	echo "<table border='1'>
	<tr>
	<th>Clave de Ventas</th>
	<th>Clave de Cosmeticos</th>
	<th>Cantidad de Cosmeticos</th>
	<th>Total</th>
	</tr>";
	while ($row=mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>" .$row ['clave_v'] ."</td>";
		echo "<td>" .$row ['clavec_v'] ."</td>";
		echo "<td>" .$row ['cantidadc_v'] ."</td>";
		echo "<td>" .$row ['total_v'] ."</td>";
		echo "</tr>";
	}
	echo "</table>";
	$registros = mysqli_num_rows($resultado);
	echo "<br>El numero de Ventas son: " .$registros;
	mysqli_close($con);
	echo "</font>";
?>
	<form action="borrar2_ventas.php" method="POST">
<b>Clave de Ventas:</b> <input type="text" name="clave_v">
	<input type="submit" value="Borrar">
</form><br><br>
<form action="pagina_principal.html" method="post">
	<input type="submit" value="Principal" name="">
</form>
</html>