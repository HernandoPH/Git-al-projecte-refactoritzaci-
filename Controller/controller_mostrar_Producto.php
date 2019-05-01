<?php

	require_once(__DIR__."/../Model/Producto.php");
	$_sMensajeStock="";
	$id=$_GET['id'];
	$Producto=Producto::Obtener_producto($id);
	if($Producto[0]["Stock"]<=0){
		$_sMensajeStock="Agotado";
	}else{
		$_sMensajeStock="En Stock";

	}



	function comprobarStock_botton($Producto){
		if($Producto[0]["Stock"]<=0){
					echo "<div class='top_margin'>
					<a href='index.php'><input type='button'class='btn_vermas'value='Sin existencias'></a>
    		  </div>";
	}else{
		echo "<div class='top_margin'>
					<input type='submit'class='btn_vermas'value='Añadir al Carrito'>
    		  </div>";
	}
}
	include_once __DIR__."/../View/view_mostrar_producto.php";
	 

?>
