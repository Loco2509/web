<html>
	<head>
		<title>SISTEMA DE VENTAS :: UTP</title>
		<link href="css/login.css"  rel="stylesheet" />
		
	</head>
	<body>
	<div class="formulario">
		<h1>Inicio de sesion</h1>
		<form action="usuario/proceso_login.php" method="post">
			<?php if(isset($_GET['exito']) && $_GET['exito']=='registro'){
				echo '<p style="color: green;">Usuario registrado satisfactoriamrnte.</p>';
			} ?>
			<?php if(isset($_GET['error']) && $_GET['error']=='sesion'){
				echo '<p style="color: red;">Usuario y/o clave incorrecto.</p>';
			} ?>
			<div class="username">
				<label>Usuario</label>
				<input type="text" name="usuario" />
			</div>
			<div class="username">
				<label>Clave</label>
				<input type="password" name="clave" />
			</div>
			<div class="username">
				<label>Correo electronico</label>
				<input type="text" name="correo" />
			</div>
			<div>
			    <input type="submit" name="iniciar_sesion" value="Iniciar Sesión" onclick="redirigir()" />
			</div>
			<div>
				Si aún no tienes un usuario, <a href="usuario/registro.php">regístrate aquí</a>
			</div>
		</form>
	</div>
	</body>
</html>