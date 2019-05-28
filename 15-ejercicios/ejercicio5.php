<?php

/*
Hacer un array de video juegos y mostrarlo en tablas de html
y separar las vistas con require
*/

$tabla = array(
	'Accion' =>array("Call of Duty","Medal of honor","Fornite"),
	'Aventura' =>array("Zelda","Mario 64","Final fantasy"),
	'Deportes' =>array("Madden 19","Fifa 19","NBA 19")
);

?>

<table border="1">
	<?php require_once 'encabezado.php';?>
	<?php require_once 'primera-fila.php';?>
	<?php require_once 'segunda-fila.php';?>
	<?php require_once 'tercera-fila.php';?>
</table>