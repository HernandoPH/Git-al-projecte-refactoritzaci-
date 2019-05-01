

<!DOCTYPE html>
<html>
<head>
	<title>Carrito</title>
	<link rel="stylesheet" type="text/css" href="View/css/carrito.css">
	<?php
		include 'includes/metas.php';
    ?>

</head>
<body>
	<!--====Start Header===========-->
<?php  
      include 'header.php';
?>
	<!--====End Header===========-->
	<!--====Start Section===============-->
    <section id="carrito-section">
		<div id="carrito" class="container">
			<div id="menu">
				
				<form action="index.php?accio=carrito" method="POST">
					<div id="buscador">
						<label for="buscar">Busca por su  nombre: </label>
						<input type="search" name="buscar" id="buscar">
						<input type="submit" name="busqueda" value="Buscar" id="busqueda">
						<label for="busqueda">
							<img class="lupa" src="View/img/search.svg">
						</label>
						<a class = "todos"href="">Ver todos</a>
					</div>
				</form>

			</div>
<!--================Start Title ================ -->

        <div class="sectiontitle" id="title-left">
           	<?php echo titulo(); ?>
            <div class="smallbar"></div>
	    </div>
<!--================End Title================ -->

		<!--====Start Form===============-->
		<form action="index.php?accio=comprar" method="POST">
		<div class="headerProductos">
			<span>Imagen del Producto</span>
			<span>Nombre</span>
			<span>Precio Unitario</span>
			<span>Cantidad</span>
			<span>Eliminar</span>
		</div>
		<div id="containerContenido">
		 	<?php 
		 		echo buscar();
		 	?>
		 	
			
		</div>
		
	 	<?php 
	 		//echo obtenerCarrito($flagEliminarCarrito);
		?>
	<div class='top_margin'>
		
	<input class='col_lg_1 right   btn_vermas' type='submit' value='Comprar' name='comprarCesta'>	  
		</div>
	</form> 
	<?php  
		
		echo sumaPrecios();
	?>
	<!--====End Form===========-->

	</section>
	</div>
	<!--====End Section===========-->

	   <?php
         include'footer.php'; 
        ?>
</body>
</html>