<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="pia.css">
	<meta charset="utf-8"/>
	<style type="text/css">
		
	</style>

</head>

	<?php
	$con = mysqli_connect("localhost","root","","cosmeticos");
	$resultado = mysqli_query($con, "select * from proveedores");
	if($resultado === FALSE) {
		echo "fallo";
		die(mysqli_error());
	}
	echo "<font size=4 face=Bodoni MT Black>";

	echo "<h1>Consulta de la tabla Vendedores
	</h1>";
	echo "<table border='1'>
	<tr>
	<th>Clave</th>
	<th>Nombre</th>
	<th>Telefono</th>
	<th>Correo</th>
	<th>Clave del articulo</th>
	</tr>";
	while ($row=mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>" .$row ['clave_p'] ."</td>";
		echo "<td>" .$row ['nombre_p'] ."</td>";
		echo "<td>" .$row ['telefono_p'] ."</td>";
		echo "<td>" .$row ['correo_p'] ."</td>";
		echo "<td>" .$row ['clavec_p'] ."</td>";
		echo "</tr>";
	}
	echo "</table>";
	$registros = mysqli_num_rows($resultado);
	echo "<br>El numero de Vendedores son: " .$registros;
	mysqli_close($con);
	echo "</font>";
?>
<form action="pagina_principal.html" method="post">
	<input type="submit" value="Principal" name="">