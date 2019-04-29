<?php  

	include '../Model/acesso_bd.php';
	include_once '../Model/Categoria.php';
	include_once '../Model/Producto.php';

	$nombreCategorias = Producto::productos($_GET['id']);
	$categorias = Categoria::nombresCategorias($nombreCategorias);

	

	function valoresCategorias($actualCategory)
	{
		$codigo = "";
		
		$numeroCategorias = Categoria::nombresCategorias();
		
		for ($i=0;$i < count($numeroCategorias);$i++) 
		{
			echo "XXXXXXXXXXXXX".$numeroCategorias[$i]['ID_Categoria']."<br>";
			if ($numeroCategorias[$i]['ID_Categoria'] == $actualCategory){
				$codigo .= "<option value='".$numeroCategorias[$i]['ID_Categoria']."' selected>".$numeroCategorias[$i]['Categoria']."</option>";
			}else{
				$codigo .= "<option value=".$numeroCategorias[$i]['ID_Categoria']."'>".$numeroCategorias[$i]['Categoria']."</option>";
			}
		}
		return $codigo;
	}
	include_once'../View/view_detailProduct.php';
?>