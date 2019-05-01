<?php
		$flagEliminarCarrito=false;
		error_reporting(0);

	if(!isset($_SESSION))
	{
		session_start();	
	} 
	if(isset($_GET['id']))
	{
		require_once 'Model/model_Carrito.php';
		require_once 'Model/Producto.php';
		$repetido=true;
		$arrayProducto = Producto::productosCarrito($_GET['id']);//Obtengo el producto en un array
		$carrito = new model_Carrito();//Crea Carrito
			$array_carrito = $carrito->insertToCarrito($arrayProducto,$_POST['cantidad']); 
			$cantidad=$_POST['cantidad'] ;

if (!isset($_SESSION['carrito']))
		{	
			
			$_SESSION['carrito'] = $array_carrito;
			
		}else
		{
		if (!isset($_SESSION['flagEliminarCarrito'])) {
		$comprobar1 = $_SESSION['carrito'][0];
			
		}

		if($arrayProducto[0]['ID_Producto']==$comprobar1[0]['ID_Producto']){
			$repetido=false;
			$_SESSION['carrito'][0]['cantidad']+=$cantidad;

		}

		for($i=1;$i<count($_SESSION['carrito']);$i++){
		$comprobar = $_SESSION['carrito'][$i][0];				
			if($arrayProducto[0]['ID_Producto']==$comprobar[0]['ID_Producto']||$arrayProducto[0]['ID_Producto']==$comprobar1[0]['ID_Producto'])
			{
					
				$repetido=false;
				if($arrayProducto[0]['ID_Producto']!=$comprobar1[0]['ID_Producto']){
					$_SESSION['carrito'][$i][0]['cantidad']+=$cantidad;
				}

			}
			else
			{

			}
		}//FIn del for

			if($repetido==false)
			{
				$cantidad+= $_POST['cantidad'];
			}
			else
			{
				array_push($_SESSION['carrito'],$array_carrito);
			}
	}//fin del else
	
			include_once 'View/view_Carrito.php';


	}

	else
	{

		require_once 'Model/model_Carrito.php';	
		if(isset($_GET['eliminar'])){
		$comprobar1 = $_SESSION['carrito'][0];
		//=============================
		if  (!isset($_SESSION['flagEliminarCarrito'])&&$_GET['eliminar']==$comprobar1[0]['ID_Producto']){
				//unset($_SESSION['carrito'][0]);
				$carritoaux=$_SESSION['carrito'];
				unset($carritoaux[0]);
				$carritoaux2=array_values($carritoaux);
				$_SESSION['flagEliminarCarrito']=true;
				$_SESSION['carrito']=$carritoaux2;

		

		}else if(isset($_SESSION['flagEliminarCarrito'])){
			if($_GET['eliminar']==$comprobar1[0][0]['ID_Producto']){
				$carritoaux=$_SESSION['carrito'];
				unset($carritoaux[0]);
				$carritoaux2=array_values($carritoaux);
				$_SESSION['carrito']=$carritoaux2;


			}
		}
		for($i=1;$i<count($_SESSION['carrito']);$i++){
		$comprobar = $_SESSION['carrito'][$i][0];
			if($_GET['eliminar']==$comprobar[0]['ID_Producto']||$_GET['eliminar']==$comprobar1[0]['ID_Producto'])
			{
					
				$repetido=false;
				if($_GET['eliminar']!=$comprobar1[0]['ID_Producto']){
				$carritoaux=$_SESSION['carrito'];
				unset($carritoaux[$i]);

				$carritoaux2=array_values($carritoaux);
				$_SESSION['carrito']=$carritoaux2;
				//unset($_SESSION['carrito'][$i]);
				}
			}
			else
			{

			}
		}//FIn del for

		}
				//END IF?=================================================================
		if(isset($_POST['comprarCesta']))
		{

			include_once 'View/view_Carrito.php';

		}
		else
		{
			include_once 'View/view_Carrito.php';
		}
	}


//======================================Start Functions===================================
	function obtenerCarrito($flagEliminarCarrito)
	{
		if(isset($_SESSION['carrito']))
		{
			$array = $_SESSION['carrito'];
			for($i = 0;$i < count($array);$i++)
			{
				if($i==0 && !isset($_SESSION['flagEliminarCarrito']))
				{
					echo "<div class='contenido'>";
						echo "<div><img class = 'fotoProducto' src = View/img/".$array[$i][0]['Foto']."></img></div>";
						echo "<div>".$array[$i][0]['Nombre_Producto']."</div>";
						echo "<div>".$array[$i][0]['Precio_Producto']."€</div>";
						echo "<input type = 'number' value='".$array[$i]['cantidad']."'/>";
						echo "<div > <a href='index.php?accio=carrito&eliminar=".$array[$i][0]['ID_Producto']."'>X</a></div>";
					echo "</div>";
				}
				else 
				{
					echo "<div class='contenido'>";
						echo "<div><img class = 'fotoProducto' src = View/img/".$array[$i][0][0]['Foto']."></img></div>";
						echo "<div>".$array[$i][0][0]['Nombre_Producto']."</div>";
						echo "<div>".$array[$i][0][0]['Precio_Producto']."€</div>";
						echo "<input type = 'number' name='cantidadCarrito' value='".$array[$i][0]['cantidad']."'/>";
						echo "<div> <a href='index.php?accio=carrito&eliminar=".$array[$i][0][0]['ID_Producto']."'>X</a></div>";
					echo "</div>";
				}
			}	
		}
		
	}


		function buscar()
	{
		$flagEliminarCarrito=false;
		if(isset($_POST['busqueda']))
		{
			$nombre = $_POST['buscar'];
			encontrarEnCarrito($nombre);
		}
		else
		{
			obtenerCarrito($flagEliminarCarrito);
		}
	}
		function titulo()
	{
		if(!isset($_SESSION['carrito']))
		{
			echo "<h1>Carrito Vacío</h1>";
		}
		else
		{
			echo "<h1>Carrito</h1>";
		}
	}
		function sumaPrecios()

	{
		$precioTotal = 0;
		if(isset($_SESSION['carrito']))
		{
			$carrito = $_SESSION['carrito'];
			for($i = 0;$i < count($carrito);$i++)
			{
				if($i == 0 /*&& isset($_SESSION['flagEliminarCarrito'])*/)
				{
					if(!isset($_SESSION['flagEliminarCarrito'])){
					$precioTotal += $carrito[$i][0]['Precio_Producto']*$carrito[$i]['cantidad'];
				}else{
					
					$precioTotal += $carrito[$i][0][0]['Precio_Producto']*$carrito[$i][0]['cantidad'];
				}
				}
				else
				{
					$precioTotal += $carrito[$i][0][0]['Precio_Producto']*$carrito[$i][0]['cantidad'];
				}
			}
			echo "<span class=precioTotal>Precio Total: </span>".$precioTotal."€";
		}
		else
		{
			echo "<span class=precioTotal>Precio Total: </span>".$precioTotal."€";	
		}
		
	}


		function encontrarEnCarrito($nombre)
	{
		
		if(isset($_SESSION['carrito']))
		{
			$carrito = $_SESSION['carrito'];
			for($i = 0;$i < count($carrito);$i++)
			{
				if($i == 0)
				{
					if($nombre == $carrito[$i][0]['Nombre_Producto'])
					{
						echo "<div class='contenido'>";
							echo "<div><img class = 'fotoProducto' src = View/img/".$carrito[$i][0]['Foto']."></img></div>";
							echo "<div>".$carrito[$i][0]['Nombre_Producto']."</div>";
							echo "<div>".$carrito[$i][0]['Precio_Producto']."€</div>";
							echo "<input type = 'number' value='".$carrito[$i]['cantidad']."'/>";
							echo "<div > <a href='index.php?accio=carrito&eliminar=".$carrito[$i][0]['ID_Producto']."'>X</a></div>";
						echo "</div>";
					}
				}
				else
				{
					if($nombre == $carrito[$i][0][0]['Nombre_Producto'])
					{
						echo "<div class='contenido'>";
							echo "<div><img class = 'fotoProducto' src = View/img/".$carrito[$i][0][0]['Foto']."></img></div>";
							echo "<div>".$carrito[$i][0][0]['Nombre_Producto']."</div>";
							echo "<div>".$carrito[$i][0][0]['Precio_Producto']."€</div>";
							echo "<input type = 'number' name='cantidadCarrito' value='".$carrito[$i][0]['cantidad']."'/>";
							echo "<div> <a href='index.php?accio=carrito&eliminar=".$carrito[$i][0][0]['ID_Producto']."'>X</a></div>";
						echo "</div>";
					}	
				}
			}	
		}
		
	}
?>
