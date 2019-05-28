<?php

/*
Hacer un programa con PHP que añada valores a un array mientras que su longuitud sea menor a 120 y luego mostrarlo por pantalla.
*/

$coleccion = array();

for ($i=0; $i < 120; $i++) { 
	echo array_push($coleccion,$i) ."<br>";
}
