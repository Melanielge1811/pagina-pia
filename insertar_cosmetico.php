<!DOCTYPE html>
<html>
<body>
	<link rel="stylesheet" type="text/css" href="pia.css">
<h1>Insertar Cosmeticos</h1>

<form action="insertar-cosmetico.php" method="post">
	<table border="1">
		<tr><td>Clave: </td>
			<td><input type="text" name="clave_c"></td>
		</tr>
		<tr><td>Producto: </td>
			<td><input type="text" name="producto_c"></td>
		</tr>
		<tr><td>Cantidad: </td>
			<td><input type="text" name="cantidad_c"></td>
		</tr>
		<tr><td>Precio: </td>
			<td><input type="text" name="precio_c"></td>
		</tr>
	</table>
	<input type="submit" value="Grabar">
</form>