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
<!--================Start Title ================ -->

        <div class="sectiontitle" id="title-left">
            <h1>Resumen de Compra </h1>
            <div class="smallbar"></div>
        </div>
<!--================End Title================ -->

		<!--====Start Form===============-->
		<form action="Controller/controller_Carrito.php" method="POST">
		<div class="headerProductos">
			<span>Imagen del Producto</span>
			<span>Nombre</span>
			<span>Precio Unitario</span>
			<span>Cantidad</span>
		</div>

	 	<?php 
	 		echo obtenerCarrito();
	 	?>
	
	<article>
		<div id="options">
			<div id="total">
				<!--<span>Precio Total: </span>-->
				<span>
					
				</span>
			</div>
		</div>
	</article>
				<div class='top_margin'>
					<input class="col_lg_1 right  btn_vermas" type='submit' value='Comprar' name="comprarCesta">
    		  </div>

	</form> 
	<!--====End Form===========-->

	</section>
	</div>
	<!--====End Section===========-->

	   <?php
         include'footer.php'; 
        ?>
</body>
</html>