
<!DOCTYPE html>
<html>
<head>
	<title>PStore | Mostrar Usuario</title>
    <?php 
        include 'includes/metas.php';
    ?>  
    
    
   

</head>
<body>


<?php  
        include 'header.php';
    ?>
<section id="Resgistro-section">
    <div class="container">
<!--================Start Title ================ -->

        <div class="sectiontitle" id="title-left">
            <h1>Usuario: <?php echo $_sNombre; ?> </h1>
            <div class="smallbar"></div>
        </div>
<!--================End Title================ -->

    <!--===================Start left Colum ===================================== ================================-->
        
     <div class="col_lg_6 div1  left Detalles-producto-img" >
      
            <form action="./index.php?accio=Modificar_user" method="post" onsubmit="return checkRegistro()" >
                 <!--================Start New Input ================ -->
                            <div class="cont-input">
                                Nombre y Apellidos *<br/>
                                <input class="input-registro" type="text" id="Nombre" name="Nombre" value="<?php echo $_sNombre; ?>" >
                                <span class="span-error" id="ErrorNombre" ></span>
                            </div>
                    <!--================End New Input ================ -->
                    <div class="cont-input">

                                 Dirección  <br/>
                                <input class="input-registro" type="text" name="DPostal"  value="<?php echo $_sDireccion; ?>"  >
                                <span class="span-error"></span>
                            </div>
                            <!--================End New Input ================ -->

                            <!--================Start New Input ================ -->
                            <div class="cont-input">
                                Telefono fijo <br/>
                                <input class="input-registro" type="phone" name="TFijo"  value="<?php echo $_iTFijo; ?>" >
                                <span class="span-error"></span>
                            </div>
                            <!--================End New Input ================ -->

                            <!--================Start New Input ================ -->
                            <div class="cont-input">
                                 Fecha de Nacimieto <br/>
                                <input class="input-registro" type="date" name="FNacimiento"  value="<?php echo $_sBirthday; ?>" >
                                <span class="span-error"></span>
                            </div>
                        <!--================End New Input ================ -->
                        
                        






                </div>
    <!--===================End left Colum ===================================== ================================-->

     <div class="col_lg_6  div2 left"  >
         <!--================Start New Input ================ -->
                            <div class="cont-input2">
                                Poblacion <br/>
                                <input class="input-registro" type="text" name="Poblacio"  value="<?php echo $_sPoblacion; ?>" >
                                <span class="span-error"></span>
                            </div>
                            <!--================End New Input ================ -->
                            <div class="cont-input2">
                                Código Postal <br/>
                                <input class="input-registro" type="text" name="CPostal"  value="<?php echo $_iCodigoP; ?>"  >
                                <span class="span-error"></span>
                            </div  >
                            <!--================End New Input ================ -->

                            <!--================Start New Input ================ -->
                            <div class="cont-input2">
                                Telefono movil <br/>
                                <input class="input-registro" type="phone" name="TMovil"  value="<?php echo $_iTMovil; ?>">
                                <span class="span-error"></span>
                            </div>
                            <!--================End New Input ================ -->
                            <!--================Start New Input ================ -->
                            <div class="cont-input2">
                                Correo Electronico * <br/>
                                <input class="input-registro" type="email"  id="Correo" name="Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" /  value="<?php echo $_sCorreo; ?>"  readonly>
                                <span class="span-error" id="ErrorCorreo"></span>
                            </div>
                            <!--================End New Input ================ -->
                            <div class="cont-input3   button-right col_lg_6 left div2" >
                                <input class=" input-registro"  type="submit" name="changepass" value="Cambiar Contraseña">
                            </div>
     </div>

                         <div class="cont-input2 div1 button-left col_lg_6 left" >
                            <input  class="btn btn_red input-registro" type="submit" name="MostrarUser" value="Modicar Usuario">
                         </div>
                          <div class="cont-input2   button-right col_lg_6 left div2" >
                             <input class= "btn_red_borrar" type="submit" name="BorrarUser" value="BorrarUsuario">
                          </div>


        </form >



        

      </div>

    </section>
 
     <?php

         include'footer.php'; 
         include'includes/Scripts.php'; 
     ?>
</body>
</html>