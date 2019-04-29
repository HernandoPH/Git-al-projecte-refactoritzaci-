<?php
require_once(__DIR__."\\..\\Model\\ClassModel-Usuario.php");

	
$correo_logeado=$_SESSION['correo-logeado'];
	echo $correo_logeado;


    Usuario::eliminarUsuario($correo_logeado);

	
	include_once __DIR__."\\..\\Controller\\Controller-EliminarUsuario.php";


?>
<form action="">

<input type="submit" name="">

</form>


