<!DOCTYPE html>
<html>
<head>
	<title>Modificar Producto</title>
	<link rel="stylesheet" type="text/css" href="../View/css/edicionProducto.css">
	<meta charset="utf-8">
</head>
<body>	
	<div id="container_modAdmin">
		<div id="datos">
			<form action="../Controller/controller_DetailProduct.php?id=<?php echo $nombreCategorias[0]['ID_Producto']; ?>" method="POST">
				<fieldset class="formField">
					<legend>Producto a editar</legend>
					<div id="contentForm">
						<label for="nombre">Nombre producto: </label>
						<input class="input-registro" type="text" name="nombre" value="<?php echo $nombreCategorias[0]['Nombre_Producto']; ?>" id="nombre">
						<label for="precio">Precio producto: </label>
						<input class="input-registro" type="number" name="precio" step="0.01" value="<?php echo $nombreCategorias[0]['Precio_Producto']; ?>" id="precio">
						<label for="stock">Unidades del producto: </label>
						<input class="input-registro" type="number" name="stock" value="<?php echo $nombreCategorias[0]['Stock']; ?>" id="stock">
						<label for="Categoria">Categoría del producto: </label>
						<select name="categoria" id="Categoria">

						<?php
							echo valoresCategorias($nombreCategorias[0]['Categoria']);
						?>
						</select>
						<div id="buttons">
							<input type="submit" name="modificar" value="modificar">
							<a href="../Controller/controller_modProduct.php">Volver al listado</a>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>