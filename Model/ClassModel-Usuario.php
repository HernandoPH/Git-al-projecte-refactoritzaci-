<?php 
	class Usuario
	{
		private $Nombre;
		private $FechaNac;
		private $Password;
		private $Correo;
		private $direccion;
		private $Cpostal;
		private $Tmovil;
		private $TFijo;

		function __construct($nombre,$FechaNac,$Password,$Correo,$direccion,$Cpostal,$Tmovil,$TFijo)	
	{					
			$this ->nombre = $nombre;
			$this ->FechaNac = $FechaNac;
			$this ->Password = $Password; 
			$this ->direccion = $direccion;
			$this ->Correo = $Correo;
			$this ->Cpostal = $Cpostal;
			$this ->Tmovil = $Tmovil;
			$this ->TFijo = $TFijo;
		}
		
		function insertar_usuario(){
			try {

            	include 'acesso_bd.php';
				$stmt = $dbh->prepare("SELECT Correo FROM usuarios WHERE Correo = ?");
				$stmt->execute( array($this ->Correo));
				if ($stmt->fetch(PDO::FETCH_ASSOC)) {
				}else{
					$stmt = $dbh->prepare("INSERT INTO usuarios(`Correo`,`Nombre`,`Password`, `Direccion`, `CodigoPostal`, `Movil`, `Fijo`, `Birthday`) VALUES(?,?,MD5(?),?,?,?,?,?)");
					$stmt->execute( array($this ->Correo,$this ->nombre,$this ->Password,$this ->direccion,$this ->Cpostal,$this ->Tmovil,$this ->TFijo,$this ->FechaNac));
				}}catch(PDOExecption $e) {
					print "Error!: " . $e->getMessage() . " deshacer</br>";
  				}

			}
	


	function modificarUsuario(){
			try {

            	include 'acesso_bd.php';
				$stmt = $dbh->prepare("UPDATE `usuarios` SET `Nombre`=?,`Direccion`=?,`CodigoPostal`=?,`Movil`=?,`Fijo`=? ,`Password`=MD5(?),`Birthday`=? WHERE  `Correo`=?");
				$stmt->execute( array($this->nombre,$this->direccion,$this->Cpostal,$this->Tmovil,$this->TFijo,$this->Password,$this->FechaNac,$this->Correo));		


				}catch(PDOExecption $e) {
					print "Error!: " . $e->getMessage() . " deshacer</br>";
  				}


	}

 public static function eliminarUsuario($correo_logeado)	{

	try {
		 $message = "Sesion: ".$correo_logeado;
		include 'acesso_bd.php';

		$stmt = $dbh->prepare("DELETE  FROM `usuarios` WHERE  `Correo` LIKE ?");

		$stmt->execute( array($correo_logeado));		
        echo "<script type='text/javascript'>alert('$message');</script>";

	}catch(PDOExecption $e) {
		print "Error!: " . $e->getMessage() . " deshacer</br>";
	}
}
}



?>