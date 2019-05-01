<!DOCTYPE html>
<html>
<head>
	<title>LogIn Administrador</title>
	<link rel="stylesheet" type="text/css" href="../View/css/LoginAdmin.css">
	<link rel="stylesheet" type="text/css" href="../View/css/principal.css">
	<link rel="stylesheet" type="text/css" href="../View/css/Plantilla_By_Danial.css">
	<script type="text/javascript" src="../View/JavaScript/loginAdmin.js"></script>
</head>
<body>
	<section id="AdministradorLogin">
		<div class="container">
			<div class="sectiontitle">
				<h1 >Login Administrador</h1>
				<div class="smallbar"></div>
			</div>
			<div class="midels ofset_4_left">
			
			<form action="../Controller/controller_loginAdmin.php" method="POST" onsubmit="return validarFormulario()">
				<div id="datos">
					<div class="User">
						<label for="usuario">Usuario: </label>
						<input type="text" name="usuario" id="usuario" class="input-registro">
						<p></p>
					</div>
					<div>
						<label for="contra">Contraseña: </label>
						<input type="password" name="contra" id="contra" class="input-registro">
						<p></p>
					</div>
					<div class="submit ofset_1_left">
					<input type="submit" name="submit" id="submit" class="input-registro" value="Ingresar">
					</div>
				</div>
			</form>
			</div>
		</div>
	</section>
	<?php
		include '../View/includes/Scripts.php';
	?>
</body>
</html>