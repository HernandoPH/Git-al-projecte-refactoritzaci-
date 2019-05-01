<?php
if(isset($_SESSION['correo-logeado'])){
require_once(__DIR__."\\..\\Model\\ClassModel-Usuario.php");
	

	if (!empty($_SESSION['correo-logeado'])) {
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
	include_once __DIR__."\\..\\View\\view_MostrarUser.php";

	} if(isset($_POST['BorrarUsuario'])){
            include __DIR__.'/Controller/Controller-EliminarUsuario.php';
	}
	if(isset($_POST['MostrarUser'])){
            include __DIR__.'/Controller/Controller-ModificarUsuario.php';
	}
	if(isset($_POST['changepass'])){
            include __DIR__.'/View/View-cambiopass.php';
	}



}else{
header("Location: index.php");
}
  
?>



