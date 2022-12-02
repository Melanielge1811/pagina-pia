<!DOCTYPE html>
<html>
<body>
	<link rel="stylesheet" type="text/css" href="pia.css">
<h1>Insertar Vendedores</h1>

<form action="insertar-vendedores.php" method="post">
	<table border="1">
		<tr>
			<td>Clave:</td><td>
			<input type='text' name='clave_p' value="">
		</td>
	</tr>
		<tr>
			<td>Nombre:</td><td>
			<input type='text' name='nombre_p' value="">
		</td>
	</tr>
		<tr>
			<td>Telefono:</td><td>
			<input type='text' name='telefono_p' value="">
		</td>
	</tr>
		<tr>
			<td>Correo:</td><td>
			<input type='text' name='correo_p' value="">
		</td>
	<tr>
			<td>Clave del articulo:</td><td>
			<input type='text' name='clavec_p' value="">
		</td>
	</tr>
	</table>
	<input type="submit" value="Grabar">
</form>