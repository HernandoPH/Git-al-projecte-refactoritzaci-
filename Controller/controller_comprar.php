<?php
	//Verifica si estas logeado
	if(isset($_SESSION['correo-logeado'])){

			

		require_once './Model/Producto.php';
		require_once './Model/ClassModel-Comprar.php';

		$carrito=$_SESSION['carrito'];

		echo"<pre>";
				var_dump($carrito);echo"</pre>";


if(isset($_SESSION['flagEliminarCarrito']) &&$_SESSION['flagEliminarCarrito']==true){

//------------------------Tomamos valores---------------------------------------
	for($i=0;$i<count($carrito);$i++){
		$cantidad=$carrito[$i]['cantidad'];
		$correo=$_SESSION['correo-logeado'];
		$id_producto=$carrito[$i][0][0]['ID_Producto'];
		$precio=$carrito[$i][0][0]['Precio_Producto'];;
		$fecha= date('d-m-Y H:i:s');
		$Compra=new Comprar($id_producto,$precio,$correo,$fecha,$cantidad);
		$flag=$Compra->realizar_compra();
		if($flag){
			//echo"<br>Se ha insertado";
		}else{
			//echo"<br>no se ha insertado";
		}
	}
		}else{//Primer elemento error

		for($i=0;$i<count($carrito);$i++){
			if($i==0){
				$cantidad=$carrito[$i]['cantidad'];
				$correo=$_SESSION['correo-logeado'];
				$id_producto=$carrito[$i][0]['ID_Producto'];
				$precio=$carrito[$i][0]['Precio_Producto'];;
				$fecha= date('d-m-Y H:i:s');
				
				}else{
			

				$cantidad=$carrito[$i][0]['cantidad'];
				$correo=$_SESSION['correo-logeado'];
				$id_producto=$carrito[$i][0][0]['ID_Producto'];
				$precio=$carrito[$i][0][0]['Precio_Producto'];;
				$fecha= date('d-m-Y H:i:s');
				
			}
				
				$Compra=new Comprar($id_producto,$precio,$correo,$fecha,$cantidad);
				$flag=$Compra->realizar_compra();
				if($flag){
					//echo"<br>Se ha insertado";
				}else{
					//echo"<br>no se ha insertado";
				}
			}
					
		

		}
		unset($_SESSION['carrito']);
		header("Location: ./index.php");

	//Si no estas logeado redireciona a index
	}else{
		header("Location: ./index.php");
	}




	//Start Functions----------------------------------------------------------------

	function obtenerCarrito()
	{
		$array = $_SESSION['carrito'];
		/*echo "<pre>";
		var_dump($array);
		echo "</pre>";*/
		for($i = 0;$i < count($array);$i++)
		{
			if($i==0)
			{
				echo "<div class='contenido'>";
				echo "<div><img class = 'fotoProducto' src = View/img/".$array[$i][0]['Foto']."></img></div>";
				echo "<div>".$array[$i][0]['Nombre_Producto']."</div>";
				echo "<div>".$array[$i][0]['Precio_Producto']."€</div>";
				echo "<input type = 'number' value='".$array[$i]['cantidad']."'/>";
				echo "</div>";
			}
			else 
			{
				echo "<div class='contenido'>";
				echo "<div><img class = 'fotoProducto' src = View/img/".$array[$i][0][0]['Foto']."></img></div>";
				echo "<div>".$array[$i][0][0]['Nombre_Producto']."</div>";
				echo "<div>".$array[$i][0][0]['Precio_Producto']."€</div>";
				echo "<input type = 'number' value='".$array[$i][0]['cantidad']."'/>";
				echo "</div>";
			}
		}
	}
?>
