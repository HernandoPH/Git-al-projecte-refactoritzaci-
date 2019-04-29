<?php  

	require_once '../Model/Producto.php';

	include"../View/addProduct.php";

	$nameProduct = $_POST['producto'];
	$priceProduct = $_POST['precio'];
	$stock = $_POST['cantidad'];
	$categoria = (int) $_POST['categorySelect'];
	comprobar($nameProduct,$priceProduct,$stock,$categoria);

	function comprobar($nameProduct,$priceProduct,$stock,$categoria)
	{
		$producto = new Producto($nameProduct,$priceProduct,$stock,$categoria);
		$filas = $producto -> comprobarProductos();
		if($filas == 0)
		{
			insertData($nameProduct,$priceProduct,$stock,$categoria,$producto);
		}
		else
		{
			header("Location:../View/admin.php?errorP=1");
		}
	}

	function insertData($nameProduct,$priceProduct,$stock,$categoria,$producto)
	{	
		$producto -> insert();
		header("Location:../View/admin.php?errorP=0");
	}

?>