<?php
	function crear_Mensaje_error($mensaje){
		return " <div style='background-color: red;height: 50px;border-radius: 20px;text-align: center; font-size: 22px;font-weight: bold;vertical-align: middle; width:700px;''>
                <p style='position: relative;top: 10px;'>".$mensaje."</p>
            </div>";
	}
?>

<?php
require_once(__DIR__."\\..\\Model\\ClassModel-Usuario.php");
		$mensajeError="";

	if (!empty($_POST["Nombre"])) {
		$username=$_POST["Nombre"];
		$FechaNacimiento=$_POST["FNacimiento"];
		$pass=$_POST["Password"];
		$correo=$_POST["Correo"];
	    $direccion=$_POST["DPostal"];
	    $Cposta=$_POST["CPostal"];
	    $Tmovil=$_POST["TMovil"];
	    $Tfijo=$_POST["TFijo"];
	    $Poblacion=$_POST["Poblacio"];
	    
		$newUser = new Usuario($username,$FechaNacimiento,$pass,$correo,$direccion,$Cposta,$Tmovil,$Tfijo,$Poblacion);
		$flag=$newUser->comprobar_existencia();
		if(!$flag){
		$newUser->insertar_usuario();
		}
		else{
			$mensajeError=crear_Mensaje_error("El usuario ya existe");
		}

	}

	include_once __DIR__."\\..\\View\\View-Registro.php";

?>



