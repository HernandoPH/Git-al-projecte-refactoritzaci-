<?php
if(isset($_SESSION['correo-logeado'])){

	require_once(__DIR__."\\..\\Model\\ClassModel-Usuario.php");

	if (!empty($_SESSION['correo-logeado'])) {
		$correo_logeado=$_SESSION['correo-logeado'];
		echo $correo_logeado;
    	Usuario::eliminarUsuario($correo_logeado);
	}
	session_destroy();
	header("Location: index.php");
}else{
	header("Location: index.php");

}	


?> 

