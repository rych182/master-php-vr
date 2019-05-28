<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
	
	if(!is_dir('images')){
		mkdir('images', 0777);
	}
	//move_uploaded_file: Agarra el archivo que acabamos de subir y guardalo en el destino que tu quiera
	//['tmp_name'] es el archivo temporal donde esta ubicado ahora
	move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
	header("Refresh: 3; URL=index.php");
	echo "<h1>Imagen subida correctamente</h1>";
}else{
	header("Refresh: 5; URL=index.php");
	"<h1>Sube una imagen con un formato correcto!</h1>";
}