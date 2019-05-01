<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../View/css/listadoProductos.css">
	<script type="text/javascript" src="../View/JavaScript/eliminar.js"></script>
</head>
<body>
	<div id="menu">
		<form action="../Controller/controller_modProduct.php" method="POST">
			<div id="buscador">
				<label for="buscar">Busca por su  nombre: </label>
				<input type="search" name="buscar" id="buscar">
				<input type="submit" name="busqueda" value="Buscar" id="busqueda">
				<label for="busqueda">
					<img class="lupa" src="../View/img/search.svg">
				</label>
			</div>
		</form>
		<a href="../View/admin.php">Volver al Home</a>
	</div>
	<table>
		<tr>
			<th></th>
			<th></th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Stock</th>
			<th>Categoría</th>
			<th>Foto</th>
		</tr>
		
		<?php  
			include_once'../Controller/controller_modProduct.php';
			require_once'../Model/Categoria.php';

			for($i = 0;$i < count($arrayParaTabla);$i++)
			{?>
				<tr>
					<td>
						<a href="../Controller/controller_DetailProduct.php?id=<?php echo $arrayParaTabla[$i]['ID_Producto'];?>">Modificar</a>
					</td>
					<td>
						<span class="eliminar" onclick="confirmarEliminacion(<?php echo $arrayParaTabla[$i]['ID_Producto']; ?>);">Eliminar</span>
					</td>
					<td>
						<?php 

							echo utf8_encode($arrayParaTabla[$i]['Nombre_Producto']);

						?>
					</td>
					<td>
						<?php  

							echo $arrayParaTabla[$i]['Precio_Producto']."€";

						?>
					</td>
					<td>
						<?php  

							echo $arrayParaTabla[$i]['Stock'];

						?>
					</td>
					<td>
						<?php
							
							$categoria = nombreCategoriaProducto($arrayParaTabla[$i]['Categoria']); 
							echo utf8_encode($categoria);
						?>
					</td>
					<td>
						<img src="../View/img/<?php echo $arrayParaTabla[$i]['Foto'];?>" alt = "Foto_producto">
						
					</td>
				</tr><?php
			}



		?>
	</table>
</body>
</html>