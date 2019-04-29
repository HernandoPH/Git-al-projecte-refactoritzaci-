<?php  
	require_once '../Model/Categoria.php';


	$_sNombre = utf8_decode($_POST['nameCategory']);
		
	//Comprobamos que no exista esa categoria ya en la base de datos
	$categoria = new Categoria($_sNombre);
	$row = $categoria->comprobar();
	if($row == 0)
	{
		$categoria->insertCategoria();
		header("Location:../View/admin.php?error=0");
	}
	else
	{
		header("Location:../View/admin.php?error=1");
	}
	
?>