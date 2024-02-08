<?php
include '../bd/conexion.php';

$idususario = $_GET['idususario'];


		$consulta = 'DELETE FROM ususario WHERE id = '.$idususario;
		mysqli_query($conexion, $consulta);
		header('Location: ../portada.php');
	

?>