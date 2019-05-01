<!DOCTYPE html>
<html>
<head>
	<title>Agregar Categoría</title>
	<link rel="stylesheet" type="text/css" href="../View/css/admin.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="containerFormsAdminCategory">
		<form action="../Controller/controller_saveCategory.php" method="post" onsubmit="return categories();">
			<fieldset class="fieldsetAdmin">
				<legend class="legendAdmin">Agregar Categoría</legend>
				<label for="category">Nombre categoría</label>
				<input class="input-registro" type="text" name="nameCategory" id="category">
				<span class="errorEmpty"></span>
				<input class="input-registro" type="submit" name="enviarCategoria" value="Enviar categoría" class="actionsProducts">
				<a href="../View/admin.php">Volver al Home</a>
				<p>
					<?php
						echo $_sMensaje;
					?>
				</p>
			</fieldset>
		</form>
	</div>
</body>
</html>