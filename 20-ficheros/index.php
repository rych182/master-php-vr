<?php
/*
//En Linux w = escritura, r = lectura, x = ejecución, a+ = permite leer y escribir
//Abrir archivo
$archivo = fopen("ficheros_texto.txt","a+");

//Leer contenido
while (!feof($archivo)) {
	$contenido = fgets($archivo);
	echo $contenido . "<br>";
}

//Escribir contenido
fwrite($archivo, "Soy un texto que ha sido escrito con la funcion fwrite");

//Cerrar archivo
fclose($archivo);
*/

//copy('ficheros_texto.txt', 'ficheros_copiado.txt') or die("Error al copiar");
//rename("ficheros_copiado.txt", "fichero_recopiadito_jaja.txt");

//unlink('fichero_recopiadito_jaja.txt') or die('Error al borrar');

if (file_exists("ficheros_texto.txt")) {
	echo "Si existe";
}else{
	echo "No existe el archivo";
}