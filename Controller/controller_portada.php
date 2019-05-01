<?php 
	if(isset($_POST['categoriaSelect']))
	{
		$categoria=$_POST['categoriaSelect'];
	}
	else
	{
		$categoria="";
	}
	$productosCode = "";
	require_once 'Model/Producto.php';
	$productos = Producto::productoEspecifico($categoria);

	for($i = 0;$i < count($productos);$i++)
	{
		if($productos[$i]['Stock']>0){
			$Stock="En Stock";
		}
		else{
			$Stock="Agotado";
		}
		$productosCode .="<div class='col_lg_3 col_sm_6 left productos'>";
		$productosCode .="<div class='contenido_productos'>";
		$productosCode .= "<div class = productosSelect>
								<img class='producteimg' src=View/img/".$productos[$i]['Foto']." alt= producto></img>
								<div class='Product_title'><span><strong>".$productos[$i]['Nombre_Producto']."</strong></span></div>
								<div class='Product_title'><span>".$productos[$i]['Precio_Producto']." €</span></div>
								<div class='Product_title'><span>".$Stock."</span></div>
								<div class='top_margin'><a title='".$productos[$i]['Nombre_Producto']."' class='btn_vermas' href='index.php?accio=mostrar_producto&id=".$productos[$i]['ID_Producto']."' target='Blank'><i class='fa fa-search'></i> Ver Detalles</a></div>
						</div>";
		$productosCode .="</div>";
		$productosCode .="</div>";
	}
	

	
		include_once'./View/portada.php';
	
	
	function verOptions()
	{
		include_once 'Model/Categoria.php';
		$codi = "";
		$arrayCategorias = Categoria::allCategorias();

		for($i = 0;$i < count($arrayCategorias);$i++)
		{
			$codi .= "<option value =".$arrayCategorias[$i]['ID_Categoria'].">".utf8_encode($arrayCategorias[$i]['Categoria'])."</option>";
		}
		return $codi;
	}
?>