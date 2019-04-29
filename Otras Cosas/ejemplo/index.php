<?php



	if( isset($_GET['accio']) ){
		$accio = $_GET['accio'];
	}
	else{
		$accio = 'portada';
	}

	switch($accio){
		
		/* Els següents casos són només a mode d'exemple */


		case 'llistar-categories':
			include __DIR__.'/controllers/controller_llistar-categories.php';
			break;

		case 'registre':
			include __DIR__.'/controllers/controller_registre.php';
			break;

		case 'veure-cistella':
			include __DIR__.'/controllers/controller_veure-cistella.php';
			break;

		/* etc */

		case 'portada':
		default:
			include __DIR__.'/controllers/controller_portada.php';		
			break;		

	}


?>
