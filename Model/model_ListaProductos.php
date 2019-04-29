<?php  
	class model_ListaProductos
	{

		private $listado = array();

		function crearLista()
		{
			include 'acesso_bd.php';
			$listaProductos = "SELECT * FROM productos";
			$ejecutar = $dbh->prepare($listaProductos);
			$ejecutar->execute();
			$productosenArray = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
			return $productosenArray;
		}
	}
?>