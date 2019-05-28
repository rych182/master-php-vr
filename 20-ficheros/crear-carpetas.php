<?php

//0777 significa que esa carpeta tendrá todos los permisos

if (!is_dir('mi_carpeta')) {
	mkdir('mi_carpeta',0777)or die('No se puede crear la carpeta');
}else{
	echo "Ya existe la carpeta";
}

//borra una carpeta

//rmdir('mi_carpeta');


//mientras que haya archivos en la carpeta

if ($gestor = opendir('./mi_carpeta')) {
	//mientras que haya archivos en la carpeta
	while (false !== ($archivo = readdir($gestor))) {
		if ($archivo != '.' && $archivo != '..') {
			//pusimos . y .. para que no te aparezcan a la hora de correr el código los puntos de la raiz
			echo $archivo . "<br>";
		}
		
	}
}