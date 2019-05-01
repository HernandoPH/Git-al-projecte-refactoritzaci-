<?php  
	
	class model_UsuarioAdmin
	{
		private $nombre;
		private $contra;

		function __construct($nombre,$contra)
		{
			$this->nombre = $nombre;
			$this->contra = $contra;
		}

		function comprobarAdmin()
		{
			include '../Model/acesso_bd.php';
			$consultaAdministrador = "SELECT count(*) FROM admin WHERE Usuario LIKE '$this->nombre' AND Contra LIKE '$this->contra'";
			$ejecutarQuery = $dbh->prepare($consultaAdministrador);
			$ejecutarQuery->execute();

			$coincidenciasAdministradores = $ejecutarQuery->fetchColumn();
			return $coincidenciasAdministradores; 
		}
	}

?>