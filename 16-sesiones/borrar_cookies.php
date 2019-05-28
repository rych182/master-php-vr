<?php

if ($_COOKIE['micookie']) {
	unset($_COOKIE['micookie']);
	//caducamos la cookie
	setcookie('micookie','',time()-100);
}