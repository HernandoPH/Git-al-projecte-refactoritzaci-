<?php  
	require_once '../Model/model_ListaProductos.php';
	mostrarProductos();

	function mostrarProductos()
	{
		$lista = new model_ListaProductos();
		$arrayParaTabla = $lista->crearLista();
		require_once'../View/view_productos.php';
	}
	
?>