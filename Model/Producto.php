<?php 
	class Producto
	{
		private $nombre;
		private $precio;
		private $stock;
		private $categoria;
		private $foto;

		function __construct($nombre,$precio,$stock,$categoria,$foto)
		{
			$this ->nombre = $nombre;
			$this ->precio = (double)$precio;
			$this ->stock = (int)$stock; 
			$this ->categoria = (int)$categoria;
			$this ->foto = $foto;
		}

		function comprobarProductos()
		{
			include '../Model/acesso_bd.php';
			//Comprobar si existe ese registro
			$comprobarProducto = "SELECT count(*) FROM productos WHERE Categoria LIKE $this->categoria AND Nombre_Producto LIKE '$this->nombre'";
			$exec = $dbh -> prepare($comprobarProducto);
			$exec->execute();
			$row = $exec -> fetchColumn();
			return $row;
		}
		function insert()
		{
			include '../Model/acesso_bd.php';
			try
			{
			
				$query = "INSERT INTO productos(Nombre_Producto,Precio_Producto,Stock,Categoria,Foto) VALUES(?,?,?,?,?)";
				$ejec = $dbh-> prepare($query);
				$ejec->execute([$this->nombre,$this->precio,$this->stock,$this->categoria,$this->foto]);
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
		}

		public static function obtenerNombreFoto()
		{
			include '../Model/acesso_bd.php';
			$IDFoto = "SELECT max(ID_Producto) as max FROM productos";
			$ejecutar = $dbh->prepare($IDFoto);
			$ejecutar->execute();
			$maximo = $ejecutar->fetch();
			return $maximo['max'];
		}
		public static function productos($id)
		{
			
			include '../Model/acesso_bd.php';
			$datosProducto = "SELECT * FROM productos WHERE ID_Producto = $id";
			$ejecutar = $dbh -> prepare($datosProducto);
			$ejecutar -> execute();
			$datoObtenido = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
			return $datoObtenido;
		}


		//---------------------Start Function-----------------------------------------------------
		//Esta funcion es un duplicado de la funcion productos pero cambiando las rutas ya que se llaman desde rutas distintas

		public static function Obtener_producto($id)
		{
			
			include 'acesso_bd.php';
			$datosProducto = "SELECT * FROM productos WHERE ID_Producto = $id";
			$ejecutar = $dbh -> prepare($datosProducto);
			$ejecutar -> execute();
			$datoObtenido = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
			return $datoObtenido;
		}
		//---------------------End Function-----------------------------------------------------

		public static function modificarProducto($id,$nombre,$precio,$stock,$categoria)
		{
			include '../Model/acesso_bd.php';

			$consultaUpdate = "UPDATE productos SET Nombre_Producto = '$nombre', Precio_Producto = $precio, Stock = $stock, Categoria = $categoria WHERE ID_Producto = $id";
			
			$realizarUpdate = $dbh -> prepare($consultaUpdate);
			$realizarUpdate -> execute();
		}
		//---------------------End Function-----------------------------------------------------

		public static function eliminarProducto($idProducto)
		{
			include '../Model/acesso_bd.php';

			$consultaDelete = "DELETE FROM productos WHERE ID_Producto = $idProducto";
			$ejecutarDelete = $dbh->prepare($consultaDelete);
			$ejecutarDelete -> execute();
		}
		//---------------------End Function-----------------------------------------------------

		public static function productoEspecifico($categoria)
		{
			include 'Model/acesso_bd.php';
			if($categoria != "")
			{
				$consultaProducto = "SELECT * FROM productos WHERE Categoria = $categoria";

			}
			else
			{
				$consultaProducto = "SELECT * FROM productos";		
			}
			$ejecutarProducto = $dbh->prepare($consultaProducto);
			$ejecutarProducto -> execute();

			$arrayProductos = $ejecutarProducto->fetchAll(PDO::FETCH_ASSOC);
			return $arrayProductos;
		}
		//---------------------End Function-----------------------------------------------------

		public static function productosCarrito($id)
		{
			
			require_once'./Model/acesso_bd.php';
			$datosProducto = "SELECT * FROM productos WHERE ID_Producto = $id";
			$ejecutar = $dbh -> prepare($datosProducto);
			$ejecutar -> execute();
			$datoObtenido = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
			$dato = $datoObtenido;
			return $dato;
		}
		//---------------------End Function-----------------------------------------------------
		
		public static function stockProducto($id)
		{
			require_once'./Model/acesso_bd.php';
			$stock = "SELECT Stock FROM productos WHERE ID_Producto = $id";
			$ejecutar = $dbh -> prepare($datosProducto);
			$ejecutar -> execute();
			$disponibilidadStock = $ejecutar->fetch(PDO::FETCH_ASSOC);
			return $disponibilidadStock;
		}
	}
?>