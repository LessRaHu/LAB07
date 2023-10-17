<?php
	$servidor="localhost";
	$usuario="root";
	$clave="ROOT";
	$baseDedatos="lab";

	$enlace = mysqli_connect($servidor,$usuario,$clave,$baseDedatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
	mysqli_set_charset($enlace,"utf8");
?>