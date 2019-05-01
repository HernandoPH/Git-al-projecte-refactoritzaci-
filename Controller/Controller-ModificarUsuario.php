<?php
if(isset($_SESSION['correo-logeado'])){
	require_once(__DIR__."/../Model/ClassModel-Usuario.php");

	
	if (!empty($_POST["Nombre"])) {
		$username=$_POST["Nombre"];
		$FechaNacimiento=$_POST["FNacimiento"];
		$pass="";
		//$correo="cuenta@cuenta.com";	
		$correo=$_SESSION['correo-logeado'];
	    $direccion=$_POST["DPostal"];
	    $Cposta=$_POST["CPostal"];
	    $Tmovil=$_POST["TMovil"];
	    $Tfijo=$_POST["TFijo"];
	    $Poblacion=$_POST['Poblacio'];

		$newUser = new Usuario($username,$FechaNacimiento,$pass,$correo,$direccion,$Cposta,$Tmovil,$Tfijo,$Poblacion);
		
		$_SESSION["name"]=$_POST["Nombre"];
		$newUser->modificarUsuario();


	}

	
		$correo_logeado=$_SESSION['correo-logeado'];
    	$_aDatosUser=Usuario::mostrarUser($correo_logeado);
    	//var_dump($_aDatosUser);
	    $_sNombre=$_aDatosUser["Nombre"];
	    $_sCorreo=$_aDatosUser["Correo"];
	    $_sBirthday=$_aDatosUser["Birthday"];
	    $_sDireccion=$_aDatosUser["Direccion"];
	    $_iCodigoP=$_aDatosUser["CodigoPostal"];
	    $_sPoblacion=$_aDatosUser["Poblacion"];
	    $_iTMovil=$_aDatosUser["Movil"];
	    $_iTFijo=$_aDatosUser["Fijo"];

	
	 if(isset($_POST['BorrarUser'])){
            include './Controller/Controller-EliminarUsuario.php';
	}	 
	if(isset($_POST['BorrarUser'])){
            include './Controller/Controller-EliminarUsuario.php';
	}

	if(isset($_POST['changepass'])){
            include'./View/View-cambiopass.php';
	}

	include_once __DIR__."\\..\\View\\view_MostrarUser.php";


}
else{
header("Location: index.php");
}



    

?>


