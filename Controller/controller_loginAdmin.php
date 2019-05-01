<?php 
	session_start();
	include_once '../Model/model_UsuarioAdmin.php';
	if(isset($_SESSION['admin']))
	{
		header("Location:../View/admin.php");
	}
	else
	{
		if($_POST)
		{
			$user = $_POST['usuario'];
			$pass = md5($_POST['contra']);
			$admin = new model_UsuarioAdmin($user,$pass);
			$numeroAdmin = $admin->comprobarAdmin();

			if($numeroAdmin == 1)
			{
				$_SESSION['admin'] = $user;
				header("Location:../View/admin.php");
			}
			else{
			
				header("Location:../Controller/controller_loginAdmin.php");
			}
		}
		else
		{
			include_once '../View/view_loginAdmin.php';
		}	
	}
	

?>