<?php

/*Crear un array y 3 variables, cada variable debe de ser un booleano, un entero y una cadena de texto y comprobar que sus valores*/

$cadena = array('Hello world','lol');
$entero = 144;
$texto = "Mamá chuchoc";
$boleano= true;

if (is_array($cadena)) {
	echo "Soy una cadena de texto"."<br>";
}

if (is_bool($boleano)) {
	echo "Soy un boleano"."<br>";
}

if (is_integer($entero)) {
	echo "Soy un número entero"."<br>";
}

if (is_string($texto)) {
	echo "Soy texto"."<br>";
}