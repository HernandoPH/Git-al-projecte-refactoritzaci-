<?php  
	require_once '../Model/Categoria.php';
	$_sMensaje = "";
	if(!isset($_POST['enviarCategoria']))
	{
		include_once '../View/view_addCategory.php';
	}
	else
	{

		$_sNombre = utf8_decode($_POST['nameCategory']);
			
		//Comprobamos que no exista esa categoria ya en la base de datos
		$categoria = new Categoria($_sNombre);
		$row = $categoria->comprobar();
		if($row == 0)
		{
			$categoria->insertCategoria();
			$_sMensaje = "<h3 class='productoInsertado'>La categoría se ha insertado correctamente</h3>";
		}
		else
		{
			$_sMensaje = "<h3 class='mensajeExistente'>Esta categoría ya existe en la base de datos</h3>";
		}
	}
	include_once '../View/view_addCategory.php';
?>