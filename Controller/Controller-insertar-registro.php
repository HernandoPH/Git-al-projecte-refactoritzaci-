<?php
require_once(__DIR__."\\..\\Model\\ClassModel-Usuario.php");

	if (!empty($_POST["Nombre"])) {
		$username=$_POST["Nombre"];
		$FechaNacimiento=$_POST["FNacimiento"];
		$pass=$_POST["Password"];
		$correo=$_POST["Correo"];
	    $direccion=$_POST["DPostal"];
	    $Cposta=$_POST["CPostal"];
	    $Tmovil=$_POST["TMovil"];
	    $Tfijo=$_POST["TFijo"];
	    
		$newUser = new Usuario($username,$FechaNacimiento,$pass,$correo,$direccion,$Cposta,$Tmovil,$Tfijo);
		$newUser->insertar_usuario();
	}

	include_once __DIR__."\\..\\View\\View-Registro.php";

?>


