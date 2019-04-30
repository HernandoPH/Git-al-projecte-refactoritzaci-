<?php 
	class Login
	{
		private $Password;
		private $Correo;

		function __construct($Correo,$Password)
		{
			$this ->Password = $Password; 
			$this ->Correo = $Correo;
			
		}
		//Envia la query a la Bd ademas de incluir el acceso a la BD 
		function Consulta($sql,$correo1,$Passmd5 ){
    		include 'acesso_bd.php';
			$stmt = $dbh->prepare($sql);
            $stmt->execute( array($correo1,$Passmd5));
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
		}
		//Realiza un alert en JS con el mensaje que se le pase popr referencia 
		function MensajeAlert($message){
   			 echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		function comprobar_usuario(){
			$flag;
				try {

            		$Passwordmd5=md5($this ->Password);
            		$sqlString="SELECT Correo,Nombre FROM usuarios WHERE Correo = ? AND Password = ?";
            		$row=$this->Consulta($sqlString,$correo1,$Passmd5);
                     if ($row) {
                            $_SESSION['correo-logeado']=$this->Correo;
                            $this->MensajeAlert("Password:$this->Password Sesion: ".$_SESSION['login']);
							$flag=true;

                     }else{
							$flag=false;
                     }

					
				}catch(PDOExecption $e) {
					print "Error!: " . $e->getMessage() . " deshacer</br>";
  				}
  				return $flag;
			
			//________________________end FUNCION____________________
			}

		function Logout(){
				session_destroy();
				header("Location: __DIR__./index.php?accio=portada");

		}


	
   



}

?>