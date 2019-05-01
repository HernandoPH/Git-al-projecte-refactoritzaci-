
<?php  
	session_start();
	require_once '../Model/model_ListaProductos.php';
	require_once '../Model/Categoria.php';
	if(!isset($_SESSION['admin']))
	{
		include_once '../View/view_loginAdmin.php';
	}
	else
	{
		if(isset($_POST['busqueda']))
		{
			if($_POST['buscar'] == "")
			{
				$nombre = "";
			}
			else
			{
				$nombre = $_POST['buscar'];	
			}
			mostrarProductos($nombre);		
		}
		mostrarProductos("");	
		
	}
	function mostrarProductos($nombre)
	{
		$lista = new model_ListaProductos();
		$arrayParaTabla = $lista->crearLista($nombre);
		include_once'../View/view_productos.php';
	}
	
	function nombreCategoriaProducto($idCategoria)
	{
		$nombreCategoria = Categoria::nombreCategoria($idCategoria);
		return $nombreCategoria;
	}

	
?>