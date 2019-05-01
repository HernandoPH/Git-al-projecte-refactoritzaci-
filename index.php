<?php
session_start();


    if( isset($_GET['accio']) ){
        $accio = $_GET['accio'];
    }
    else{
        $accio = 'portada';
    }

    switch($accio){
        


        case 'llistar-categories':
            include __DIR__.'/Controllers/controller_llistar-categories.php';
            break;

        case 'login':
            include __DIR__.'/Controller/controller-Comprobar-Login.php';
            break;
        case 'Modificar_user':
            include __DIR__.'/Controller/controller-ModificarUsuario.php';
            break;

        case 'registrar':
            include __DIR__.'/Controller/Controller-insertar-registro.php';
            break;
        case 'borrar_user':
            include __DIR__.'/Controller/Controller-EliminarUsuario.php';
            break;
        case 'mostrar_user':
            include __DIR__.'/Controller/Controller-MostrarUser.php';
            break;
        case 'mostrar_producto':
            include __DIR__.'/Controller/controller_mostrar_Producto.php';
            break;
        case 'Logout':
            include __DIR__.'/Controller/controller_Logout.php';
            break;
        case 'Cookies':
           include __DIR__.'/View/Cookies.php';
           break;
        case 'comprar':
             include __DIR__.'/Controller/controller_comprar.php';      
             break;     
        case 'carrito':
            include __DIR__.'/Controller/controller_Carrito.php';
            break;
        case 'historial':
            include __DIR__.'/Controller/controller_Historial_Compras.php';
            break;
            
        case 'cambiar_pass':
            include __DIR__.'/Controller/controller_cambiarpass.php';
            break;

        case 'portada':
        default:
            include __DIR__.'/Controller/controller_portada.php';      
            break; 
         

    }


?>
