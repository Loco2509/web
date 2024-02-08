<?php include 'bd/conexion.php'; ?>
<html>
	<head>
		<title>CSMAJ</title>
		<link href="css/PerfilUsuario.css"  rel="stylesheet" />
	</head>
	<body>
		<a href="producto/agregarcurso.php">Agregar Cursos</a>
		<a href="index.php">Inicio</a>
		<table>
			<thead>
				<tr>
					<th>Nro</th>
					<th>Curso</th>
					<th>Horas</th>
					<th>Sedes</th>					
					<th>Aula</th>
					<th>Fecha de Inicio</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$consulta_cursos = "SELECT * FROM matricula";
				$resultado_cursos = mysqli_query($conexion, $consulta_cursos);
				$i = 1;
				while($curso_fila = mysqli_fetch_array($resultado_cursos)){
				$i++; ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $curso_fila['Curso']; ?></td>
					<td><?php echo $curso_fila['Horas']; ?></td>
					<td><?php echo $curso_fila['Sedes']; ?></td>				
					<td><?php echo $curso_fila['Aula']; ?></td>
					<td><?php echo $curso_fila['Inicio']; ?></td>
					<td>						
						<a href="producto/eliminarcurso.php?idcurso=<?php echo $curso_fila['id']; ?>">Eliminar</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>

	</body>
</html>