<?php

	$servidor = 'localhost';
	$basedatos = 'scmaj';
	$usuario = 'root';
	$clave = '';

	$conexion = mysqli_connect($servidor, $usuario, $clave, $basedatos);

	if($conexion===FALSE){
		echo "Error de conexion: ".mysqli_connect_error();
		die();
	}


?>