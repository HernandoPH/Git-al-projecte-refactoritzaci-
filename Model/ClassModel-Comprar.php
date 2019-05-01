<?php 
	class Comprar
	{
		private $id_Producto;
		private $Precio;
		private $Correo;
		private $cantidad;
		private $fecha;

	
	function __construct($id_Producto,$Precio,$Correo,$fecha,$cantidad)
	{
		$this->id_Producto=$id_Producto;
		$this->Precio=$Precio;
		$this->Correo=$Correo;
		$this->fecha=$fecha;
		$this->cantidad=$cantidad;
		

	}

	function realizar_compra(){
		$flag=false;
		try {
			include 'acesso_bd.php';
			$PrecioFinal=$this->Precio*$this->cantidad;
		
		//Inserto en la BD la compra

			$stmt = $dbh->prepare("INSERT INTO compra(`id_compra`,`id_Producto`,`Precio`,`Correo_Usuario`,`fecha`,`Cantidad`) VALUES(null,?,?,?,?,?)");
			$stmt->execute( array($this ->id_Producto,$PrecioFinal,$this ->Correo,$this->fecha,$this->cantidad));
		//Obtengo el Stock del producto
			$stmt = $dbh->prepare("SELECT  Stock FROM productos WHERE ID_Producto= ?");
			$stmt->execute( array($this ->id_Producto));
			$Stock = $stmt->fetch(PDO::FETCH_ASSOC);

			$StockNuevo=$Stock["Stock"]-$this->cantidad;
			//Si el stock luego de la compra es inferior a 0 
			if ($StockNuevo>=0){
				$stmt = $dbh->prepare("UPDATE `productos` SET `Stock`=? WHERE  `ID_Producto`=?");
				$stmt->execute( array($StockNuevo,$this->id_Producto));	
			$flag=true;
			}

			
			//}
				
            	}catch(PDOExecption $e) {
					print "Error!: " . $e->getMessage() . " deshacer</br>";
  				}
  				return $flag;

	}

	//________________________end FUNCION____________________


	function historialCompra($correo){
		


				try {
					include 'acesso_bd.php';
					$stmt = $dbh->prepare("SELECT p.Nombre_Producto, p.Foto, c.fecha, c.Precio,c.Cantidad FROM compra AS 	c INNER JOIN productos AS p ON c.id_Producto=p.ID_Producto AND c.Correo_Usuario=?");
					$stmt->execute(array($correo));
					$dato=$stmt->fetchAll(PDO::FETCH_ASSOC);
					
            	}catch(PDOExecption $e) {
					print "Error!: " . $e->getMessage() . " deshacer</br>";
  				}
  				return $dato;
	}

	//________________________end FUNCION____________________

}