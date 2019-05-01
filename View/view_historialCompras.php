		 		
<!DOCTYPE html>
<html>
<head>
	<title></title>
	   <?php 
        include 'includes/metas.php';
    ?>  

<body>

	<?php  
        include 'header.php';
    ?>

    <section id="Historial-section">
    	<div class="container">
    		<!--================Start Title ================ -->
	        <div class="sectiontitle" id="title-left">
	            <h1>Historial de compras </h1>
	            <div class="smallbar"></div>
	        </div>
			<!--================End Title================ -->

			<div class="col_lg_6 left">
				<?php crearTabla($HistorialdeCompra); ?>
			</div>
			
		</div>
	</section>
	     <?php

         include'footer.php'; 
         include'includes/Scripts.php'; 
     ?>
</body>
</html>


			