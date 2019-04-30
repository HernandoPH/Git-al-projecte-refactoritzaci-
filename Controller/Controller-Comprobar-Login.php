<?php
require_once(__DIR__."\\..\\Model\\ClassModel-Login.php");

     $_sMensaje="";

function comprobar_campos_vacios(){
	return empty($_POST["login-Correo"])&& !empty($_POST["login-Password"])
}
	if (!comprobar_campos_vacios()) {
		$pass=$_POST["login-Password"];
		$correo=$_POST["login-Correo"];	
		$tryLogin = new Login($correo,$pass);
		$Inicio_flag=$tryLogin->comprobar_usuario();
		if($Inicio_flag){
			$_sMensaje="<h2>Iniciaste Sesion</h2>";
			header("index.php");
		}else{
			?><script type="text/javascript">alert("Hemos encontrado un error");window.location.href("index.php");</script><?php
		}
	}
	
	include_once __DIR__."\\..\\View\\popup-login.php";


?>


