<?php
require_once(__DIR__."\\..\\Model\\ClassModel-Login.php");

     $_sMensaje="";
	//include_once __DIR__."\\..\\View\\popup-login.php";
//var_dump($_POST["login-Correo"],$_POST["login-Password"]);
	if (!empty($_POST["login-Correo"])&& !empty($_POST["login-Password"])) {
			//echo("<script type='text/javascript'>alert('entre al IF Controller');</script>");
		$pass=$_POST["login-Password"];
		$correo=$_POST["login-Correo"];
	
				$tryLogin = new Login($correo,$pass);
		$Inicio_flag=$tryLogin->comprobar_usuario();
		
		if($Inicio_flag){
			$_sMensaje="<h2>Iniciaste Sesion</h2>";
			header("index.php");
			
		}else{
			//$_sMensaje="<h2 >Datos Erroneos</h2>";
			?><script type="text/javascript">alert("Hemos encontrado un error");window.location.href("index.php");</script><?php
		//	header(__DIR__);

		}
	
		
		
	}
	
	include_once __DIR__."\\..\\View\\popup-login.php";


?>


