<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <?php 
        include 'includes/metas.php';
    ?>  
</head>
<body>
<?php  
        include 'header.php';
    ?>
<section id="Detalles-producto">
    <div class="container">

        <div class="sectiontitle">
            <h1>Detalle de Producto</h1>
            <div class="smallbar"></div>
        </div>
    
    <form action="index.php?accio=carrito&id=<?php echo $Producto[0]['ID_Producto'] ?>" target="Blank" method="POST">
     <div class="col_lg_6 left detalles-img">
        <img src="  ./View/img/<?php echo $Producto[0]['Foto']  ?>">
     	
     </div>
     <div class="col_lg_6 left" >
        <h1><?php echo $Producto[0]['Nombre_Producto']; ?></h1>

        <p>Precio: <?php echo $Producto[0]['Precio_Producto']; ?></p>

        <p name="stock"><?php echo $_sMensajeStock; ?></p>
        <input type="number" class="input-number"  value="1" name="cantidad">
        
<!--==========Crea el boton =======================-->
        <?php comprobarStock_botton($Producto); ?>
<!--=======Termina de Crear el boton ================-->



         
     </form>
     </div>
     
    
</section>
     <?php

         include'footer.php'; 
         include'includes/Scripts.php'; 
     ?>
</div>
</body>
</html>