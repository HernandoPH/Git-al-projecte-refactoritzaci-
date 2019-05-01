


<?php 

	//Verifica si estas logeado
	if(isset($_SESSION['correo-logeado'])){
		$correo=$_SESSION['correo-logeado'];

		require_once './Model/Producto.php';
		require_once './Model/ClassModel-Comprar.php';

		$HistorialdeCompra=Comprar::historialCompra($correo);
		
	include_once __DIR__."\\..\\View\\view_historialCompras.php";
	//Si no estas logeado redireciona a index
	}else{
		header("Location: ./index.php");
	}
?>

<?php
function crearTabla($HistorialdeCompra){
	?>

	<table class="hcompras">
		<tr style="font-size: 20px;">
			<td colspan="2"><h3>Nombre del Usuario</h3></td>
			<td colspan="3">  <h3 style=" text-align: left; padding-left: 15px;"><?php echo $_SESSION['name']; ?></h3></td>

		</tr>
		<tr style="font-weight: bold">
			<td>Nombre<br>Producto</td>
			<td>Imagen <br> Producto</td>
			<td>Precio<br>de la compra</td>
			<td>Cantidad<br>Comprada</td>
			<td>Fecha <br>de la Compra</td>

		</tr>
		 		<?php 
		 		for ($i=0; $i <count($HistorialdeCompra); $i++) {
		 		?>
		 		<tr class="col_lg_8">

		 			<td><?php echo $HistorialdeCompra[$i]["Nombre_Producto"]?></td>
       				 <td><img width="90" src="  ./View/img/<?php echo $HistorialdeCompra[$i]['Foto'] ?> "></td>

		 			<td><?php echo $HistorialdeCompra[$i]["Precio"]?>€</td>
		 			<td><?php echo $HistorialdeCompra[$i]["Cantidad"]?> Unidades</td>
		 			<td><?php echo $HistorialdeCompra[$i]["fecha"]?></td>

		 			
		 		</tr>
		 		<?php
		 			}
		 		?>
		 	</table>
		 	<?php 
}
 ?>
