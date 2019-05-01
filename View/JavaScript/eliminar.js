function confirmarEliminacion(idProduct)
{
	var confirmacion = confirm("Está seguro que desea eliminar este vídeo");

	if(confirmacion)
	{
		window.location.href = "controller_deleteProduct.php?id="+idProduct;
	}
	else
	{
		window.location.href = "controller_modProduct.php";
	}
}