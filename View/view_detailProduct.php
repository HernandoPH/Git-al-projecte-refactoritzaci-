<!DOCTYPE html>
<html>
<head>
	<title>Modificar Producto</title>
</head>
<body>

	
	<div id="container_modAdmin">
		<div id="datos">
			<input type="text" name="nombre" value="<?php echo $nombreCategorias['Nombre_Producto']; ?>">
			<input type="number" name="precio" step="0.1" value="<?php echo $nombreCategorias['Precio_Producto']; ?>">
			<input type="number" name="stock" value="<?php echo $nombreCategorias['Stock']; ?>">
			
			<select name="categoria">

			<?php  

				echo valoresCategorias($nombreCategorias['Categoria']);

			?>
				
			</select>
		</div>
	</div>
</body>
</html>