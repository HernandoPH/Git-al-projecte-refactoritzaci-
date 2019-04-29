<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="containerFormsAdminProduct">
			<form action="../Controller/saveProduct.php" method="post" onsubmit="return validarProducto();">
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
					<input  type="submit" name="enviarProducto" value="Enviar producto" class="input-registro">
					<p>
						<?php 

							if(isset($_GET['errorP']))
							{
								if($_GET['errorP'] == 0)
								{
									echo "<h3 class='productoInsertado'>El producto se ha insertado correctamente</h3>";
								}
								else
								{
									echo "<h3 class='mensajeExistente'>Este producto ya existe en la base de datos</h3>";
								}
							}

						?>
					</p>
				</fieldset>
			</form>
		</div>
</body>
</html>