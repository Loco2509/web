<?php
include '../bd/conexion.php';

$idcurso = $_GET['idcurso'];


		$consulta = 'DELETE FROM matricula WHERE ID = '.$idcurso;
		mysqli_query($conexion, $consulta);
		header('Location: ../PerfilUsuario.php');
	

?>