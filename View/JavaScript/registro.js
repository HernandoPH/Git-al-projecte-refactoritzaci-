
	//------------------------------COMPROBAR NOMBRE-----------------------------------------------
function ComprobarNombre(Nombre){
	if (Nombre == "") {
			document.getElementById("ErrorNombre").innerHTML = "Introduce un nombre"; 
			error=false;
		}else{
				if (!nombreapellidos.test(Nombre)){
						document.getElementById("ErrorNombre").innerHTML = "Nombre Erroneo Introduce 1 Nombre y Apellidos"; 
						error=false;
				}else{
					document.getElementById("ErrorNombre").innerHTML = ""; 		
				}
			}
}
	//------------------------------------------------------------------------------------------
	//----------------------------------COMPROBAR PASS----------------------------------
function ComprobarPass(Password,Password2){
	if (Password == "") {
		document.getElementById("ErrorPassword").innerHTML = "Introduzca una contraseña por favor";
		error=false;
	}else{
		document.getElementById("ErrorPassword").innerHTML = "";
	}
	if (Password2 == "") {
		document.getElementById("ErrorPassword2").innerHTML = "Introduzca una contraseña por favor";
		error=false;
	}else{
		document.getElementById("ErrorPassword2").innerHTML = "";
	}

	if (Password!=Password2){
		error=false;	
		var divP = document.getElementById("Formulario-Registro");
		var h2P = document.getElementById("titulo-eventos-index");
		var newDivTag=document.createElement("div");
		if(document.getElementById("mensaje-error")==null){
			newDivTag.setAttribute("style","background-color: red; width: 70%;height: 50px;color: white;font-size: 25px;display: flex;align-items: center;justify-content: center ;font-weight: bold;  border-radius: 20px;");
			newDivTag.setAttribute("id","mensaje-error");
			var newPTag = document.createElement("p");                       // Create a <p> element
			var texto = document.createTextNode("Las contraseñas no coinciden ");       // Create a text node
			newPTag.appendChild(texto);
			newDivTag.appendChild(newPTag);
			h2P.style.marginTop="15px";
			divP.insertBefore(newDivTag,h2P);
	
		}		
		

	}
}
	//---------------END----------COMPROBAR PASS----------------------------------
	//-------------------------------Correo-----------------------------------------
function ComprobarCorreo(Correo){
		if (Correo == "") {
			document.getElementById("ErrorCorreo").innerHTML = "Introduce un Correo "; 
		error=false;
	}else{
		if (!testcorreo.test(Correo)){
			document.getElementById("ErrorCorreo").innerHTML = "Correo Invalido"; 
			error=false;
		}else{
			document.getElementById("ErrorCorreo").innerHTML = "";
			
		}
	}
}
		//----------END-------------Correo-----------------------------------------
function ComprobarPD(PDatos){
		
	if (PDatos == false) {
		document.getElementById("ErrorPDatos").innerHTML = "Por favor acepta los terminos y condiciones ";
		document.getElementById("ErrorPDatos").style.top="4px";
		document.getElementById("ErrorPDatos").style.marginBottom="14px";	
		error=false;
	}else{
		document.getElementById("ErrorPDatos").innerHTML = "";
	}
}
		//----------END-------------PD-----------------------------------------

function NotificarRegistro(){

		if (error==true) {
			var newDivTag=document.createElement("div");
			var divP = document.getElementById("Formulario-Registro");
			var h2P = document.getElementById("titulo-eventos-index");
			newDivTag.setAttribute("style","background-color: green; width: 70%;height: 50px;color: white;font-size: 25px;display: flex;align-items: center;justify-content: center ;font-weight: bold;  border-radius: 20px;");
			newDivTag.setAttribute("id","mensaje-error");
			//divP.removeChild(getElementById("mensaje-error"))
			var newPTag = document.createElement("p");                       // Create a <p> element
			var texto = document.createTextNode("Usuario creado correctamente ");       // Create a text node
			newPTag.appendChild(texto);
			newDivTag.appendChild(newPTag);
			h2P.style.marginTop="15px";
			divP.insertBefore(newDivTag,h2P);
	}


}


function checkRegistro(){
	var Nombre = document.getElementById("Nombre").value;
	var Password = document.getElementById("Password").value;
	var Correo = document.getElementById("Correo").value;
	var Password2 = document.getElementById("Password2").value;
	var PDatos = document.getElementById("PDatos").checked;
	alert("aaa");
	testcorreo	= /\w+@\w+\.+[a-z]/;
	testpassword = /^.*(?=.*\d)(?=.*[A-Z])/;
	nombreapellidos =/^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)/;
	error=true;
	ComprobarNombre(Nombre);
	ComprobarPass(Password,Password2);
	ComprobarCorreo(Correo);
	ComprobarPD(PDatos);
	NotificarRegistro();
	return error;
}





//-----------------------ANTIGUO CODIGO SIN FUNCIONES-----------------------------------------


		//-----------------------COMPROBAR NOMBRE-----------------------------------------
/*
	if (Nombre == "") {
			document.getElementById("ErrorNombre").innerHTML = "Introduce un nombre"; 
		error=false;
	}else{
		if (!nombreapellidos.test(Nombre)){
			document.getElementById("ErrorNombre").innerHTML = "Nombre Erroneo Introduce 1 Nombre y Apellidos"; 
			error=false;
		}else{
			document.getElementById("ErrorNombre").innerHTML = ""; 
			
		}
	}
	

	//----------------------------------COMPROBAR PASS----------------------------------
	if (Password == "") {
		document.getElementById("ErrorPassword").innerHTML = "Introduzca una contraseña por favor";
		error=false;
	}else{
		document.getElementById("ErrorPassword").innerHTML = "";
	}
	if (Password2 == "") {
		document.getElementById("ErrorPassword2").innerHTML = "Introduzca una contraseña por favor";
		error=false;
	}else{
		document.getElementById("ErrorPassword2").innerHTML = "";
	}

	if (Password!=Password2){
		error=false;	
		var divP = document.getElementById("Formulario-Registro");
		var h2P = document.getElementById("titulo-eventos-index");
		var newDivTag=document.createElement("div");
	//	divP.removeChild(getElementById("mensaje-error"))

		newDivTag.setAttribute("style","background-color: red; width: 70%;height: 50px;color: white;font-size: 25px;display: flex;align-items: center;justify-content: center ;font-weight: bold;  border-radius: 20px;");
		newDivTag.setAttribute("id","mensaje-error");
		var newPTag = document.createElement("p");                       // Create a <p> element
		var texto = document.createTextNode("Las contraseñas no coinciden ");       // Create a text node
		newPTag.appendChild(texto);
		newDivTag.appendChild(newPTag);
	
		h2P.style.marginTop="15px";
		divP.insertBefore(newDivTag,h2P);


	}

	//-------------------------------Correo-----------------------------------------

	if (Correo == "") {
			document.getElementById("ErrorCorreo").innerHTML = "Introduce un Correo "; 
		error=false;
	}else{
		if (!testcorreo.test(Correo)){
			document.getElementById("ErrorCorreo").innerHTML = "Correo Invalido"; 
			error=false;
		}else{
			document.getElementById("ErrorCorreo").innerHTML = "";
			
		}
	}
	//----------------end---------Correo-----------------------------------------



	
	if (PDatos == false) {
		document.getElementById("ErrorPDatos").innerHTML = "Por favor acepta los terminos y condiciones ";
		document.getElementById("ErrorPDatos").style.top="4px";
		document.getElementById("ErrorPDatos").style.marginBottom="14px";	
		error=false;
	}else{
		document.getElementById("ErrorPDatos").innerHTML = "";
	}
	
	if (error==true) {
		var newDivTag=document.createElement("div");
		var divP = document.getElementById("Formulario-Registro");
		var h2P = document.getElementById("titulo-eventos-index");
		newDivTag.setAttribute("style","background-color: green; width: 70%;height: 50px;color: white;font-size: 25px;display: flex;align-items: center;justify-content: center ;font-weight: bold;  border-radius: 20px;");
		newDivTag.setAttribute("id","mensaje-error");
		//divP.removeChild(getElementById("mensaje-error"))
		var newPTag = document.createElement("p");                       // Create a <p> element
		var texto = document.createTextNode("Usuario creado correctamente ");       // Create a text node
		newPTag.appendChild(texto);
		newDivTag.appendChild(newPTag);
		h2P.style.marginTop="15px";
		divP.insertBefore(newDivTag,h2P);
	}
	*/