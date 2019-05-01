<?php  


	class model_Carrito
	{
		//private $arrayCarrito = array();
		private $arrayCarrito;

		function __construct()
		{
			$this->arrayCarrito = array();					
		}

		public function insertToCarrito($producto,$cantidad)
		{
			$producto['cantidad'] = $cantidad;
			array_push($this->arrayCarrito, $producto);			
			return $this->arrayCarrito;
		}
	}


?>