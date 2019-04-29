<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../View/css/listadoProductos.css">
</head>
<body>
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
			include_once'../Model/Categoria.php';

			for($i = 0;$i < count($arrayParaTabla);$i++)
			{?>
				<tr>
					<td>
						<a href="../Controller/controller_DetailProduct.php?id=<?php echo $arrayParaTabla[$i]['ID_Producto'];?>">Modificar</a>
					</td>
					<td>
						<a href="../Controller/controller_DetailProduct.php?id=<?php echo $arrayParaTabla[$i]['ID_Producto'];?>">Eliminar</a>
					</td>
					<td>
						<?php 

							echo $arrayParaTabla[$i]['Nombre_Producto'];

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
							
							//echo $arrayParaTabla[$i]['Categoria']; 
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