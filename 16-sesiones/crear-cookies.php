<?php
/*
<b>Cookies:</b>Es un fichero que se almacena en la computadora del usuario que visita la página, con el fin de recordar datos o rastrear. el comportamiento en la web
*/

//Crear cookie
//setcookie("micookie","valor que solo puede ser texto",caducidad,ruta, dominio);

//Cookie básica
setcookie("micookie", "Valor de mi galleta");

//Cookie con expiración de 1 año

setcookie("unyear","Valor de mi cookie de 365 días",time()+(86400*365));

header('Location:ver_cookies.php');
?>

