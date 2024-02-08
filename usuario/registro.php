<html>
	<head>
		<title>SISTEMA DE VENTAS :: UTP</title>
		<link href="../css/registros.css"  rel="stylesheet" />
	</head>

	<body>
	<div class="formulario">
		<h1>Registrate</h1>
		<form action="proceso_registro.php" method="post">
			<div class="username">
				<label>Usuario</label>
				<input type="text" name="usuario" />
			</div>
			<div class="username">
				<label>Clave</label>
				<input type="password" name="clave" />
			</div>
			<div class="username">
				<label>Confirmar clave</label>
				<input type="password" name="clave_confirmar" />
			</div>
			<div class="username">
				<label>Correo electronico</label>
				<input type="text" name="correo" />
			</div>

			<?php if(isset($_GET['error']) && $_GET['error']=='clave'){
			echo '<p style="color: red;">Las claves no coinciden, vuelve a intentarlo.</p>';
			} ?>
			
			<?php if(isset($_GET['error']) && $_GET['error']=='registro'){
			echo '<p style="color: red;">El usuario ingresado ya existe.</p>';
			} ?>

			<div>
				<input type="submit" name="registro" value="Regístrate" />
			</div>
			<div>
				Si ya tienes un usuario, <a href="../indexprimario.php">inicia sesión aquí</a>
			</div>
		</form>
	</div>
	</body>
</html>