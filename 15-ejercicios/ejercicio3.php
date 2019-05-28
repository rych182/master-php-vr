<?php

/*
Programa que compruebe si una variable esta vacia y si está vacia, rellenarla con texto en minuscula y mostrarlo en mayúscula y negrita
*/

$variable;

if (empty($variable)) {
	$variable= "hello world";
	$textoMayuscula = strtoupper($variable);
}
echo $textoMayuscula;
