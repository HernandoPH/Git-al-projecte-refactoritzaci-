<?php  
		
	include_once '../Model/Producto.php';

	Producto::eliminarProducto($_GET['id']);

	include_once 'controller_modProduct.php';
?>