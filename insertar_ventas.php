<!DOCTYPE html>
<html>
<body>
	<link rel="stylesheet" type="text/css" href="pia.css">
<h1>Insertar Vendedores</h1>

<form action="insertar-ventas.php" method="post">
	<table border="1">
		<tr>
			<td>Clave de Ventas:</td><td>
			<input type='text' name='clave_v' value="">
		</td>
	</tr>
		<tr>
			<td>Clave de Cosmeticos:</td><td>
			<input type='text' name='clavec_v' value="">
		</td>
	</tr>
		<tr>
			<td>Cantidad de Cosmeticos:</td><td>
			<input type='text' name='cantidadc_v' value="">
		</td>
	</tr>
		<tr>
			<td>Total:</td><td>
			<input type='text' name='total_v' value="">
		</td>
	</tr>
	</table>
	<input type="submit" value="Grabar">
</form>