<html>
<style>
*{
	font-family: Calibri;
}
form{
	width: 35%;
	margin: 10% auto;
	padding: 20px;
	border: 1px solid #A1A1A1;
	border-radius: 10px;
}

form input, form select{
	width: 100%;
	border: 1px solid #A1A1A1;
	border-radius: 5px;
	padding: 5px 10px;
}
</style>
	<head>
		<title>Cursos</title>

		<link href="../css/cursos.css"  rel="stylesheet" />
	</head>
	<body>
		<form action="proceso_agregarcurso.php" method="post">
			<h3>Agregar Curso</h3>			
			<p>
				<label>Cursos</label>
				<select type="text" name="Curso" required>
				<option value="">Selecciona un curso</option>
	<?php
	
	// Establecer la conexión a la base de datos
	include '../bd/conexion.php';
	

	// Consultar los nombres de los cursos desde la base de datos
	$query = "SELECT Nombre_curso FROM cursos";
	$result = mysqli_query($conexion, $query);

	// Generar las opciones del dropdown basadas en los resultados de la consulta
	while ($row = mysqli_fetch_assoc($result)) {
		$nombreCurso = $row['Nombre_curso'];
		echo "<option value=\"$nombreCurso\">$nombreCurso</option>";
	}

	// Cerrar la conexión a la base de datos
	mysqli_close($conexion);
	?>
</select>
		</p>
		<p>
			<label>Horas</label>			
			<select type="text" name="Horas" required>
				<option value=""></option>
				<option value="40">40 horas</option>
				<option value="45">45 horas</option>
				<option value="50">50 horas</option>
			</select>
		</p>

		<label>Sedes</label>
			<select type="text" name="Sedes" required>
			<option value="">Selecciona una sede</option>
	<?php
	
	// Establecer la conexión a la base de datos
	include '../bd/conexion.php';
	

	// Consultar los nombres de los cursos desde la base de datos
	$query = "SELECT Nombre_sedes FROM sedes";
	$result = mysqli_query($conexion, $query);

	// Generar las opciones del dropdown basadas en los resultados de la consulta
	while ($row = mysqli_fetch_assoc($result)) {
		$nombreCurso = $row['Nombre_sedes'];
		echo "<option value=\"$nombreCurso\">$nombreCurso</option>";
	}

	// Cerrar la conexión a la base de datos
	mysqli_close($conexion);
	?>
</select>
		<p>
			<label>Aula</label>
			<select type="text" name="Aula" required>
				<option value=""></option>
				<option value="Aula A01">Aula A01</option>
				<option value="Aula A02">Aula A02</option>
				<option value="Aula A03">Aula A03</option>
			</select>
		</p>
		<p>
			<label>Fecha de Inicio</label>
			<select type="text" name="Inicio" required> 
				<option value=""></option>
				<option value="2023-07-20">2023-07-20</option>
				<option value="2023-07-20">2023-08-10</option>
				<option value="2023-07-20">2023-08-15</option>
			</select>
		</p>			
			
			<p>
				<input type="submit" name="guardar" value="Agregar" />
			</p>
			<p>
				<a href="../PerfilUsuario.php">Regresar</a>
			</p>
		</form>
	</body>
</html>