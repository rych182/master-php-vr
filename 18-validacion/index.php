<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
	<title>Validación del formulario</title>
</head>
<body>
	<h1>Formulario</h1>

	<?php
		if (isset($_GET['error'])) {
			$error = $_GET['error'];
			if ($error == 'faltan_valores') {
				echo "<h1>Ingresa todos los datos</h1>";
			}
			if ($error == 'nombre') {
				echo "<h1>Ingresa el nombre sin número</h1>";
			}
			if ($error == 'apellidos') {
				echo "<h1>Ingresa el apellido sin números</h1>";
			}
			if ($error == 'edad') {
				echo "<h1>Ingresa la edad</h1>";
			}
			if ($error == 'email') {
				echo "<h1>Ingresa el correo correctamente</h1>";
			}
			if ($error == 'password') {
				echo "<h1>La contraseña debe de tener mínimo 5 dígitos</h1>";
			}
		}

	?>

	<form method="POST" action="procesar_formulario.php">
		<label for="nombre">Nombre</label><br>
		<input type="text" name="nombre" required="required"><br>

		<label for="apellidos">Apellidos</label><br>
		<input type="text" name="apellidos" required="required"><br>

		<label for="edad">Edad</label><br>
		<input type="number" name="edad" required="required"><br>

		<label for="email">Email</label><br>
		<input type="email" name="email" required="required"><br>

		<label for="pass">Contraseña</label><br>
		<input type="password" name="pass" required="required"><br>

		<input type="submit" value="Enviar">
	</form>
</body>
</html>