<?php  
	session_start();
	require_once '../Model/Producto.php';
	require_once '../Model/model_ListaProductos.php';
	$_sMensaje = "";

	function comprobar($nameProduct,$priceProduct,$stock,$categoria,$foto)
	{
		global $_sMensaje;
		$producto = new Producto($nameProduct,$priceProduct,$stock,$categoria,$foto);
		$existencias = $producto -> comprobarProductos();
		if($existencias == 0)
		{
			$producto -> insert();
			$_sMensaje = "<h3 class='productoInsertado'>El producto se ha insertado correctamente</h3>";
		}
		else
		{
			$_sMensaje = "<h3 class='mensajeExistente'>Este producto ya existe en la base de datos</h3>";
		}
	}

	if(!isset($_POST['enviarProducto']))
	{
		include '../View/view_addProduct.php';
	}
	else
	{
		$nameProduct = $_POST['producto'];
		$priceProduct = $_POST['precio'];
		$stock = $_POST['cantidad'];
		$categoria = (int) $_POST['categorySelect'];
		$extensionFoto = new SplFileInfo($_FILES['foto']['name']);
		$formatoFoto = $extensionFoto->getExtension();
		if (is_uploaded_file($_FILES['foto']['tmp_name']))
		{		
			include '../Model/acesso_bd.php';
			$nombre = producto::obtenerNombreFoto();
			$nombreDirectorio = "../View/img/";
			$idUnico = $nombre+1;
			
			$nombreFichero = $idUnico .".".$formatoFoto;
			move_uploaded_file ($_FILES['foto']['tmp_name'],$nombreDirectorio . $nombreFichero);
		}
		else
		{
			print ("No se ha podido subir el fichero\n");
		}
		comprobar($nameProduct,$priceProduct,$stock,$categoria,$nombreFichero);

		include_once '../View/view_addProduct.php';
	}
?>