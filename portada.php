<?php include 'bd/conexion.php'; ?>
<html>
	<head>
		<title>SISTEMA DE VENTAS :: UTP</title>
		<link href="css/TBeditar.css"  rel="stylesheet" />
	</head>
	<body>
		<a href="index.php">Inicio</a> 
		<table>
			<thead>
				<tr>
					<th>Nro</th>
					<th>Usuario</th>
					<th>Contraseña</th>
					<th>Correo</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$consulta_usuario = "SELECT * FROM ususario";
				$resultado_usuario = mysqli_query($conexion, $consulta_usuario);
				$i = 1;
				while($usuario_fila = mysqli_fetch_array($resultado_usuario)){
				$i++; ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $usuario_fila['usuario']; ?></td>
					<td><?php echo $usuario_fila['clave']; ?></td>
					<td><?php echo $usuario_fila['correo']; ?></td>
					<td>
						<a href="producto01/editarproducto.php?idususario=<?php echo $usuario_fila['id']; ?>">Editar</a>
						<a href="producto01/eliminarproducto.php?idususario=<?php echo $usuario_fila['id']; ?>">Eliminar</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>

	</body>
</html>