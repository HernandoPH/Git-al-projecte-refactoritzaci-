<?php
require_once(__DIR__."/../Model/ClassModel-Usuario.php");
	if (!empty($_POST["Nombre"])) {
		$username=$_POST["Nombre"];
		$FechaNacimiento=$_POST["FNacimiento"];
		$pass=$_POST["Password"];
		//$correo="cuenta@cuenta.com";	
		$correo=$_SESSION['correo-logeado'];
	    $direccion=$_POST["DPostal"];
	    $Cposta=$_POST["CPostal"];
	    $Tmovil=$_POST["TMovil"];
	    $Tfijo=$_POST["TFijo"];
	  /*
	    $username="modificado_username";
		$FechaNacimiento="02/01/1998";
		$pass="modificado_pass";
		$correo="cuenta@cuenta.com";	
	    $direccion="modificado_direcc";
	    $Cposta="modificado_Cp";
	    $Tmovil="modificado_movil";
	    $Tfijo="_Fijo";

	    */
		$newUser = new Usuario($username,$FechaNacimiento,$pass,$correo,$direccion,$Cposta,$Tmovil,$Tfijo);

		$newUser->modificarUsuario();
	}

	include_once __DIR__."/../View/view_modificarUser.php";




    

?>


