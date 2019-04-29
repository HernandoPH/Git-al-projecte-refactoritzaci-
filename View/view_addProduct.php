<!DOCTYPE html>
<html>
<head>
	<title>Agregar Producto</title>
	<link rel="stylesheet" type="text/css" href="../View/css/admin.css">
	<script type="text/javascript" src="js/admin.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<div class="containerFormsAdminProduct">
			<form action="../Controller/controller_saveProduct.php" method="post" onsubmit="return validarProducto();"  enctype="multipart/form-data">
				<fieldset class="fieldsetAdmin">
					<legend class="legendAdmin">Agregar un producto</legend>
					<label for="nameProduct">Nombre del producto:</label>
					<input class="input-registro" type="text" name="producto" id="nameProduct">
					<span class="errorEmpty"></span>
					<label for="priceProduct">Precio del producto:</label>
					<input class="input-registro" type="number" name="precio" id="priceProduct" step="0.01" min="1">
					<span class="errorEmpty"></span>
					<label for="stock">Stock: </label>
					<input class="input-registro" type="number" name="cantidad"  id="stock">
					<span class="errorEmpty"></span>
					<select name="categorySelect" class="input-registro">
						<option value="x">Elija una categoría</option>
						<?php  
							include '../Model/acesso_bd.php';
							$queryCategories = "SELECT * FROM categorias";
							$exec = $dbh -> prepare($queryCategories);
							$exec -> execute();
							
							while($camposCategoria = $exec->fetch(PDO::FETCH_ASSOC))
							{?>
								<option value = <?php echo $camposCategoria['ID_Categoria']; ?>>
								<?php  

									echo utf8_encode($camposCategoria['Categoria']);
								?>
							</option>	<?php
							}
						?>
					</select>
					<span class="errorEmpty"></span>
					<input type="file" name="foto" class="input-registro" id="foto" accept="image/*">
					<span class="errorEmpty"></span>
					<input  type="submit" name="enviarProducto" value="Enviar producto" class="input-registro foto">
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