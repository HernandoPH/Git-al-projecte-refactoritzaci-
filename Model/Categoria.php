<?php  
	
	class Categoria
	{
		private $nombre;


		function __construct($nombre)
		{
			$this->nombre = $nombre;
		}

		function comprobar()
		{
			include '../Model/acesso_bd.php';
			$comprobacionCategorias = "SELECT count(Categoria) FROM categorias WHERE Categoria LIKE '$this->nombre'";
			$ex = $dbh -> prepare($comprobacionCategorias);
			$ex -> execute();

			$fila = $ex->fetchColumn();
			return $fila;
		}

		function insertCategoria()
		{
			include '../Model/acesso_bd.php';

			$_sNombre = $_POST['nameCategory'];
				
			//Comprobamos que no exista esa categoria ya en la base de datos
			$queryCategory = "INSERT INTO categorias(Categoria) VALUES(?)";
			$ejec = $dbh -> prepare($queryCategory);
			$ejec -> execute([$this->nombre]);	
		}
		function categorias()
		{
			include '../Model/acesso_bd.php';
			$categorias = "SELECT Categoria,ID_Categoria FROM categorias";
			$ejecutar = $dbh->prepare($categorias);
			$ejecutar -> execute();
		}
		public static function actualCategory($datoObtenido)
		{
			include '../Model/acesso_bd.php';
			$nombreCategorias = "SELECT Categoria FROM categorias";
			$exec = $dbh->prepare($nombreCategorias);
			$exec -> execute();

			$categoriaObtenida = $exec->fetch(PDO::FETCH_ASSOC);

			$nombreCategoriaActual = "SELECT Categoria FROM categorias WHERE ID_Categoria = $datoObtenido[Categoria]";
			$exec2 = $dbh->prepare($nombreCategoriaActual);
			$exec2->execute();

			$categoriaActual = $exec2->fetchAll(PDO::FETCH_ASSOC);

			return $categoriaActual;
		}
		public static function numeroCategorias()
		{
			include '../Model/acesso_bd.php';
			$codigo = "";
			$todasLasCategorias = "SELECT count(*) FROM categorias";
			$ejecutar = $dbh->prepare($todasLasCategorias);
			$ejecutar -> execute();
			$numeroCategorias = $ejecutar->fetchColumn();
			return $numeroCategorias;
		}
		public static function nombresCategorias()
		{
			include '../Model/acesso_bd.php';
			$nombreCategorias = "SELECT * FROM categorias";
			$ejec = $dbh->prepare($nombreCategorias);
			$ejec -> execute();
			$arrayNombreCategorias = $ejec->fetchAll(PDO::FETCH_ASSOC);
			return $arrayNombreCategorias;
		}
		public static function nombreCategoria($idCat)
		{
			include '../Model/acesso_bd.php';
			$consultaNombre = "SELECT Categoria FROM categorias WHERE ID_Categoria = $idCat";
			$ejecutar = $dbh->prepare($consultaNombre);
			$ejecutar -> execute();

			$nombre = $ejecutar->fetch(PDO::FETCH_ASSOC);
			return $nombre['Categoria'];
		}
		public static function allCategorias()
		{
			include 'Model/acesso_bd.php';
			$consultaCategorias = "SELECT * FROM categorias";
			$ejecutarConsulta = $dbh->prepare($consultaCategorias);
			$ejecutarConsulta->execute();

			$arrayCategorias = $ejecutarConsulta->fetchAll(PDO::FETCH_ASSOC);
			return $arrayCategorias;
		}
	}

?>