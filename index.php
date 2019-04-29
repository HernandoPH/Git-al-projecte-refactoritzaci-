<?php
session_start();


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

        case 'login':
            include __DIR__.'/controller/controller-Comprobar-Login.php';
            break;
        case 'Modificar_user':
            include __DIR__.'/controller/controller-ModificarUsuario.php';
            break;

        case 'registrar':
            include __DIR__.'/controller/Controller-insertar-registro.php';
            break;
      case 'borrar_user':
            include __DIR__.'/Controller/Controller-EliminarUsuario.php';
            break;

        /* etc */

        case 'portada':
        default:
            include __DIR__.'/View/portada.php';      
            break;      

    }


?>
