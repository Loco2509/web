<?php
include '../bd/conexion.php';

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave_confirmar = $_POST['clave_confirmar'];
$correo = $_POST['correo'];

if($clave==$clave_confirmar){

	$consulta_usuarios = "SELECT * FROM ususario";
	$resultado_usuarios = mysqli_query($conexion, $consulta_usuarios);
	$existe_usuario = 0;
	while($usuario_fila = mysqli_fetch_array($resultado_usuarios)){
		if($usuario_fila['usuario'] == $usuario){
			$existe_usuario = 1;
		}
	}
	if($existe_usuario == 0){
		$consulta = 'INSERT INTO ususario (usuario, clave,correo) VALUES ("'.$usuario.'", "'.$clave.'","'.$correo.'")';
		mysqli_query($conexion, $consulta);
		header('Location: ../indexprimario.php?exito=registro');
	}else{
		header('Location: registro.php?error=registro');
	}

	
}else{
	header('Location: registro.php?error=clave');
}

?>