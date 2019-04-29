// Plugin options and our code
$("#modal_trigger").leanModal({
		overlay: 0.6,
		closeButton: ".modal_close"
});

$(function() {
		// LLamando al Formulario de Login
		$("#modal_trigger").click(function() {
				$(".social_login").hide();
				$(".user_login").show();
				return false;
		});

});
function login_error(){
	$(".social_login").hide();
	$(".user_login").show();

}

function checkLogin(){
	
	var continuar=true;
	var Password = document.getElementById("login-Password").value;
	var Correo = document.getElementById("login-Correo").value
	if (Correo == "") {
		document.getElementById("login-ErrorCorreo").innerHTML = "Introduce un Correo "; 
		continuar=false;
	}
	else{
		document.getElementById("login-ErrorCorreo").innerHTML = ""; 
	}

	if (Password == "") {
		document.getElementById("login-ErrorPassword").innerHTML = "Introduzca una contraseña por favor";
		continuar=false;
	}
	else{
		document.getElementById("login-ErrorPassword").innerHTML = "";
	}
	
	return continuar;
}
