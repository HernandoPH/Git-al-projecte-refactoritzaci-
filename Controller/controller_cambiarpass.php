<?php
if(isset($_SESSION['correo-logeado'])){

	require_once(__DIR__."\\..\\Model\\ClassModel-Usuario.php");
	
	$correo=$_SESSION['correo-logeado'];
	$Pass=$_POST['Passwordcambio'];
	Usuario:: modificarUsuariopass($correo,$Pass);


	include_once __DIR__."\\..\\Controller\\Controller-MostrarUser.php";

}else{
header("Location: index.php");
}
  
?>



