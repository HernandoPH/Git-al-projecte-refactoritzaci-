<?php 
	if (!empty($_SESSION['correo-logeado'])) 
	{
	require_once(__DIR__."\\..\\Model\\ClassModel-Login.php");

		Login::Logout();
	}
	if(isset($_SESSION['admin']))
	{
		session_destroy();
		header("Location:./index.php");
	}
 ?>