<header >
<div id="navbar" >
  <div class="ofset_1_right ofset_1_left" >
    <div id="logo">
      <a href="index.php#default" id="logofoto" >
        <img src="View/img/logo.png" class="logo" alt="error" >
      </a>  
      <a href="index.php?accio=carrito"><i class="fa fa-shopping-cart"></i></a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a> 
    </div>
    <div id="navbar-right">
      <a class="active" href="index.php?accio=portada">Inicio</a>
       <a href="index.php?accio=portada#productos">Productos</a>
      <?php if(!isset($_SESSION["name"])){?>
        <a  id="modal_trigger" href="./index.php?accio=login" >Iniciar Sesión</a>
        <a href="index.php?accio=registrar">Registrar</a>
      <?php }else{?>
      <a href="javascript:void(0)" class="popup" style="padding: 10px; border:2px solid white; margin-right:  10px; " onclick="myFunction1()"><?= $_SESSION["name"]?> <i class="fa fa-cog"></i></a>
      <ul id="hidden">
                <li><a href="./index.php?accio=mostrar_user">Ver tu perfil</a></li>
                <li><a href="./index.php?accio=Logout">Salir de Sesion</a></li>
                <li><a href="./index.php?accio=historial">Historial de Compra</a></li>

                   
      </ul>
      <?php }?>
    </div>
  </div>
</div>
<?php   
 //  include"Controller/Controller-Comprobar-Login.php";
         ?>


</header>
