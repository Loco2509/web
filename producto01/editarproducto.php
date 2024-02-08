<?php 

include '../bd/conexion.php'; 

$consulta_usuario = "SELECT * FROM ususario WHERE id=".$_GET['idususario'];
$resultado_usuario = mysqli_query($conexion, $consulta_usuario);
while($usuario_fila = mysqli_fetch_array($resultado_usuario)){
	$usuario=$usuario_fila['usuario'];
	$clave=$usuario_fila['clave'];
	$correo=$usuario_fila['correo'];
}
?>
<html>
	<head>
		<title>SISTEMA DE VENTAS :: UTP</title>
		<link href="../css/login.css"  rel="stylesheet" />
		<link href="../css/producto.css"  rel="stylesheet" />
	</head>
	<body>
	<div class="formulario">
		<form action="proceso_editarproducto.php" method="post">
			<input type="hidden" name="idususario" value="<?php echo $_GET['idususario'] ?>" />
			<h3>Editar Usuario</h3>
			<div class="username">
				<label>Usuario</label>
				<input value="<?php echo $usuario ?>" type="text" name="usuario" />
			</div>
			<div class="username">
				<label>Clave</label>
				<input value="<?php echo $clave ?>" type="text" name="clave" />
			</div>
			<div class="username">
				<label>Correo</label>
				<input value="<?php echo $correo ?>" type="text" name="correo" />
			</div>
			<div>
				<input type="submit" name="guardar" value="Editar" />
			</div>
			<div>
				<input type="submit" href="../portada.php" value="Regresar" />
			</div>
		</form>
	</div>
	</body>
</html>