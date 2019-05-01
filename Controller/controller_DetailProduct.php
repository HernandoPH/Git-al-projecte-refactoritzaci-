<?php  

	include '../Model/acesso_bd.php';
	include_once '../Model/Categoria.php';
	include_once '../Model/Producto.php';
	if(!isset($_POST['modificar']))
	{

		$nombreCategorias = Producto::productos($_GET['id']);
		//$categorias = Categoria::nombresCategorias();

		function valoresCategorias($actualCategory)
		{
			$codigo = "";
			$numeroCategorias = Categoria::nombresCategorias();
			
			for ($i=0;$i < count($numeroCategorias);$i++) 
			{
				if ($numeroCategorias[$i]['ID_Categoria'] == $actualCategory){
					$codigo .= "<option value='".$numeroCategorias[$i]['ID_Categoria']."' selected>".$numeroCategorias[$i]['Categoria']."</option>";
				}else{
					$codigo .= "<option value=".$numeroCategorias[$i]['ID_Categoria']."'>".$numeroCategorias[$i]['Categoria']."</option>";
				}
			}
			return $codigo;
		}
		include_once'../View/view_detailProduct.php';
	}
	else
	{
		$nombreProducto = $_POST['nombre'];
		$precioProducto =  (double) $_POST['precio'];
		$stockProducto = (int) $_POST['stock'];
		$categoriaProducto = (int) $_POST['categoria'];
		$modificar = Producto::modificarProducto($_GET['id'],$nombreProducto,$precioProducto,$stockProducto,$categoriaProducto);
		header('Location:../Controller/controller_modProduct.php');
	}


?>