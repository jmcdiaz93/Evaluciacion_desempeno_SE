<?php

$mysqli= new mysqli("10.100.20.39","root","economia","evaluacionop");


if (mysqli_connect_errno()) {
	echo 'Conexion fallida:', mysqli_connect_error();
	exit();
}

?>