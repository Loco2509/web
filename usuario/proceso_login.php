<?php
include '../bd/conexion.php';

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$correo = $_POST['correo'];

$consulta_usuarios = "SELECT * FROM ususario WHERE usuario='".$usuario."' AND clave='".$clave."'";
$resultado_usuarios = mysqli_query($conexion, $consulta_usuarios);
$existe_usuario = 0;
while($usuario_fila = mysqli_fetch_array($resultado_usuarios)){
	if($usuario_fila['correo'] == $correo){
		$existe_usuario = 1;
		break;
	}
}

if($existe_usuario == 0){
	header('Location: ../indexprimario.php?error=sesion');
}else{
	if($correo == "axell@gmail.com"){
		header('Location: ../portada.php');
	} else {
		header('Location: ../PerfilUsuario.php');
	}
}
?>