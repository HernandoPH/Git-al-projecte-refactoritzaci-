function validarProducto()
{
	var continuar = true;
	var nombre = document.getElementById("nameProduct").value;
	var precio = document.getElementById("priceProduct").value;
	var cantidad = document.getElementById("stock").value;
	var categoria = document.getElementsByTagName('select')[0].value;
	var foto = document.getElementById("foto").value;
	if(foto == "")
	{	
		mensajeError(4);
		continuar = false;
	}
	else
	{
		quitarMensaje(4);
	}
	if(nombre == "")
	{
		mensajeError(0);
		continuar = false;
	}
	else
	{
		quitarMensaje(0);
	}
	if(precio == "")
	{
		mensajeError(1);
		continuar = false;
	}
	else
	{
		quitarMensaje(1);
	}
	if(cantidad == "")
	{
		mensajeError(2);
		continuar = false;
	}
	else
	{
		quitarMensaje(2);
	}
	if(categoria == "x")
	{
		mensajeError(3);
		continuar = false
	}
	else
	{
		quitarMensaje(3);
	}
	return continuar;
}
function quitarMensaje(i)
{
	document.getElementsByClassName("errorEmpty")[i].innerHTML = "";	
}
function mensajeError(i)
{
	document.getElementsByClassName("errorEmpty")[i].innerHTML = "Este campo no puede quedar vacío";
	document.getElementsByClassName("errorEmpty")[i].style.marginTop = "10px";
	document.getElementsByClassName("errorEmpty")[i].style.marginBottom = "10px";
	document.getElementsByClassName("errorEmpty")[i].style.padding = "10px";
	document.getElementsByClassName("errorEmpty")[i].style.borderRadius = "20px";
}