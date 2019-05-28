<?php

//Un array de números que se muestre
//Ordenar el array y mostrarlo
//Mostrar su longuitud
//Buscar algún elemento


//recorrer y mostrar
echo "<h1>Recorrer y mostrar</h1>";
$numeros = array('442','42','32','12','2','23','222','21');
foreach ($numeros as $key) {
	echo $key ."<br>";
}
echo "<hr>";

echo "<h1>Ordenarlo y mostrarlo</h1>";
function mostrar($numeros){
	$resultado = "";
	foreach ($numeros as $key) {
		//$resultado = $resultado.$numero."<br>";
		$resultado .= $key."<br>";//mejor opción porque es mas limpio
	}
	return $resultado;
}
sort($numeros);
echo mostrar($numeros);

echo "<hr>";


echo "<h1>Mostrar su longuitud</h1>";
echo count($numeros);


echo "<hr>";


echo "<h1>Busqueda en el array</h1>";
$busqueda=23;
$search = array_search($busqueda, $numeros);
if (!empty($search)) {
	echo "El numero que se buscaba existe en el indice $search";
} else {
	echo "No existe el número";
}

