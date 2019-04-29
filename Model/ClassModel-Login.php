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
		
		function comprobar_usuario(){
			$flag;
				try {

            		include 'acesso_bd.php';
            		$Passwordmd5=md5($this ->Password);
                    $stmt = $dbh->prepare("SELECT Correo,Nombre FROM usuarios WHERE Correo = ? AND Password = ?");
                    $stmt->execute( array($this ->Correo,$Passwordmd5));
                    $row=$stmt->fetch(PDO::FETCH_ASSOC);
                     if ($row) {

                            $_SESSION['correo-logeado']=$this->Correo;

                           // $_SESSION[`usuariocompleto`]=$row["nombre"]." ".$row["apellidos"];

                            $message = " Password:$this->Password Sesion: ".$_SESSION['login'];
                            echo "<script type='text/javascript'>alert('$message');</script>";
							$flag=true;

                            //header("Location: ../$pagina");
                    }else{

                       		//echo"<div><p>Datos incorrectos</p></div>";
                            //$message = "Los campos son invalidos, no existen";
                            //echo "<script type='text/javascript'>alert('$message');</script>";
							$flag=false;

                            //header( "refresh:1;url=../$pagina" ); 
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