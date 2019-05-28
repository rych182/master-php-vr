<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario PHP y HTML</title>
</head>
<body>
	<h1>Formulario</h1>
	<form action="guardar.php" method="POST">
		<label for="nombre">Titulo:</label><br>
		<input type="text" name="titulo" autofocus="autofocus">
		<br>
		<label>Descripcion</label><br>
		<textarea name="descripcion"></textarea><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>