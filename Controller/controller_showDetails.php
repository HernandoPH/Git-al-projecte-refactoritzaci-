<?php  

	include '../Model/acesso_bd.php';
	include_once '../Model/Categoria.php';
	include_once '../Model/Producto.php';

	$nombreCategorias = Producto::productos($_GET['id']);
	$categoriaActual = Categoria::actualCategory($nombreCategorias);

	

	function valoresCategorias($actualCategory)
	{
		$codigo = "";
		$numeroCategorias = Categoria::numeroCategorias();
		
		
		
		for ($i=0;$i < $numeroCategorias;$i++) 
		{
			$nombre = Categoria::nombresCategorias();
			if ($nombre == $actualCategory){
				$codigo .= "<option value=$nombre[$i][ID_Categoria] selected;>".$nombre[$i]['Categoria']."</option>";
			}else{
			$codigo .= "<option value=$nombre[$i][ID_Categoria];>".$nombre[$i]['Categoria']."</option>";
			}
		}
		return $codigo;
	}
?>