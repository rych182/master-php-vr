<?php


session_start();

$variable_normal = "Soy una cadena de texto";

//Variable de sesión
$_SESSION['variable_persistente'] = "Hola soy una sesión activa";

echo $variable_normal . "<br>";
echo $_SESSION['variable_persistente'];