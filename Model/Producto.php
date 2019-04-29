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
			$datosProducto = "SELECT * FROM productos";
			$ejecutar = $dbh -> prepare($datosProducto);
			$ejecutar -> execute();
			echo $datosProducto;
			$datoObtenido = $ejecutar->fetch(PDO::FETCH_ASSOC);
			return $datoObtenido;
		}
	}
?>