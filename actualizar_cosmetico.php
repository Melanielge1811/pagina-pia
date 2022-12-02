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
	$resultado = mysqli_query($con, "select * from articulos");
	if($resultado === FALSE) {
		echo "fallo";
		die(mysqli_error());
	}
	echo "<font size=4 face=Bodoni MT Black>";

	echo "<h1>Consulta de la tabla Articulos</h1>";
	echo "<table border='1'>
	<tr>
	<th>Clave</th>
	<th>Producto</th>
	<th>Cantidad</th>
	<th>Precio</th>
	</tr>";
	while ($row=mysqli_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>" .$row ['clave_c'] ."</td>";
		echo "<td>" .$row ['producto_c'] ."</td>";
		echo "<td>" .$row ['cantidad_c'] ."</td>";
		echo "<td>" .$row ['precio_c'] ."</td>";
		echo "</tr>";
	}
	echo "</table>";
	$registros = mysqli_num_rows($resultado);
	echo "<br>El numero de registros son: " .$registros;
	mysqli_close($con);
	echo "</font>";
?>
	<form action="actualizar2_cosmetico.php" method="POST">
<b>Clave Cosmetico:</b> <input type="text" name="clave_c">
	<input type="submit" value="Editar">
</form><br><br>
<form action="pagina_principal.html" method="post">
	<input type="submit" value="Principal" name="">
</form>
</html>