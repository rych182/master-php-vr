<?php
	$resultado = false;

if (isset($_POST['n1']) && isset($_POST['n2'])){

	if (isset($_POST['sumar'])){
		$resultado = "El resultado es:" . ($_POST['n1'] + $_POST['n2']);
	}

	if (isset($_POST['restar'])){
		$resultado = "El resultado es:" . ($_POST['n1'] - $_POST['n2']);
	}

	if (isset($_POST['multiplicar'])){
		$resultado = "El resultado es:" . ($_POST['n1'] * $_POST['n2']);
	}

	if (isset($_POST['dividir'])){
		$resultado = "El resultado es:" . ($_POST['n1'] / $_POST['n2']);
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculadora PHP</title>
</head>
<body>
	<h1>Calculadora PHP</h1>
	<form action="" method="POST">
		<label>Numero1</label><br>
		<input type="number" name="n1"><br>

		<label>Numero2</label><br>
		<input type="number" name="n2"><br>
	
		<input type="submit" value="Sumar" name="sumar">
		<input type="submit" value="Restar" name="restar">
		<input type="submit" value="Multiplicar" name="multiplicar">
		<input type="submit" value="Dividir" name="dividir">
	</form>
</body>
</html>

<?php

if($resultado != false):
	echo "<h1>El resultado es: $resultado</h1>";
endif;

?>