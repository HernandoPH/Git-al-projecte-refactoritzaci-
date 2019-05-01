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
		private $Poblacion;



		function __construct($nombre,$FechaNac,$Password,$Correo,$direccion,$Cpostal,$Tmovil,$TFijo,$Poblacion)	
	{					
			$this ->nombre = $nombre;
			$this ->FechaNac = $FechaNac;
			$this ->Password = $Password; 
			$this ->direccion = $direccion;
			$this ->Correo = $Correo;
			$this ->Cpostal = $Cpostal;
			$this ->Tmovil = $Tmovil;
			$this ->TFijo = $TFijo;
			$this ->Poblacion = $Poblacion;

		}
function comprobar_existencia(){
	try {

            		include 'acesso_bd.php';
                    $stmt = $dbh->prepare("SELECT Correo FROM usuarios WHERE Correo = ? ");
                    $stmt->execute( array($this ->Correo));
                    $row=$stmt->fetch(PDO::FETCH_ASSOC);
                     if ($row) {

                           

                            $message = " El usuario ya existe en la BD";
                            echo "<script type='text/javascript'>alert('$message');</script>";
							$flag=true;
							
                    }else{

                       		//echo"<div><p>Datos incorrectos</p></div>";
                            //$message = "Los campos son invalidos, no existen";
                            //echo "<script type='text/javascript'>alert('$message');</script>";
							$flag=false;
                    }

					
				}catch(PDOExecption $e) {
						print "Error!: " . $e->getMessage() . " deshacer</br>";
  				}
  				return $flag;
}

///----------------------------END  construct----------------------------------------------------
		
		function insertar_usuario(){
			try {
					include 'acesso_bd.php';
					$stmt = $dbh->prepare("SELECT Correo FROM usuarios WHERE Correo = ?");
					$stmt->execute( array($this ->Correo));
					if ($stmt->fetch(PDO::FETCH_ASSOC)) {
					}else{
					$stmt = $dbh->prepare("INSERT INTO usuarios(`Correo`,`Nombre`,`Password`, `Direccion`, `CodigoPostal`, `Movil`, `Fijo`, `Birthday`, `Poblacion`) VALUES(?,?,MD5(?),?,?,?,?,?,?)");
					$stmt->execute( array($this ->Correo,$this ->nombre,$this ->Password,$this ->direccion,$this ->Cpostal,$this ->Tmovil,$this ->TFijo,$this ->FechaNac,$this ->Poblacion));
					}
				
            	}catch(PDOExecption $e) {
					print "Error!: " . $e->getMessage() . " deshacer</br>";
  				}

			}
///----------------------------END function----------------------------------------------------

	function modificarUsuario(){
			try {

            	include 'acesso_bd.php';
				$stmt = $dbh->prepare("UPDATE `usuarios` SET `Nombre`=?,`Direccion`=?,`CodigoPostal`=?,`Movil`=?,`Fijo`=? ,`Birthday`=?,`Poblacion`=? WHERE  `Correo`=?");
				$stmt->execute( array($this->nombre,$this->direccion,$this->Cpostal,$this->Tmovil,$this->TFijo,$this->FechaNac,$this ->Poblacion,$this->Correo));		


				}catch(PDOExecption $e) {
					print "Error!: " . $e->getMessage() . " deshacer</br>";
  				}
	}

///----------------------------END function----------------------------------------------------
public static	function  modificarUsuariopass($correo,$Pass){
			try {

            	include 'acesso_bd.php';
				$stmt = $dbh->prepare("UPDATE `usuarios` SET `Password`=md5(?) WHERE  `Correo`=?");
				$stmt->execute( array($Pass,$correo));		

				}catch(PDOExecption $e) {
					print "Error!: " . $e->getMessage() . " deshacer</br>";
  				}
	}

///----------------------------END function----------------------------------------------------
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
///----------------------------END function----------------------------------------------------

public  static function mostrarUser($correo_logeado){
	try{
			include 'acesso_bd.php';
			$stmt = $dbh->prepare("SELECT *   FROM `usuarios` WHERE  `Correo` LIKE ?");
			$stmt->execute( array($correo_logeado));
			$datoObtenido = $stmt->fetch(PDO::FETCH_ASSOC);
			//var_dump($datoObtenido);
			return $datoObtenido;

	}catch(PDOExecption $e){
		print "Error!: " . $e->getMessage() . " deshacer</br>";
	}


}

///----------------------------END function----------------------------------------------------
public  static function modificarPass($correo_logeado,$newPass){
	try {

            	include 'acesso_bd.php';
				$stmt = $dbh->prepare("UPDATE `usuarios` SET `Password`=MD5(?) WHERE  `Correo`=?");
				$stmt->execute( array( $newPass,$correo_logeado));		


				}catch(PDOExecption $e) {
					print "Error!: " . $e->getMessage() . " deshacer</br>";
  				}
}




///----------------------------END CLASS-------------------------------------------------------------
}



?>