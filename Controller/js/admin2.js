function categories()
{
	var categoria = document.getElementById("category").value
	var continuar = true;
	if(categoria == "")
	{
		document.getElementsByClassName("errorEmpty")[4].innerHTML = "Este campo no puede quedar vacío";
		document.getElementsByClassName("errorEmpty")[4].style.marginTop = "10px";
		document.getElementsByClassName("errorEmpty")[4].style.marginBottom = "10px";
		document.getElementsByClassName("errorEmpty")[4].style.padding = "10px";
	document.getElementsByClassName("errorEmpty")[4].style.borderRadius = "20px";
		continuar = false;
	}
	else
	{
		document.getElementsByClassName("errorEmpty")[4].innerHTML = "";
		continuar = true;		
	}
	return continuar;
}