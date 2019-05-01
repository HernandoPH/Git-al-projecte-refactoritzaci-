
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
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
<?php echo $mensajeError; ?>
<!--================Start Title ================ -->

        <div class="sectiontitle" id="title-left">
            <h1>Registro de Usuario</h1>
            <div class="smallbar"></div>
        </div>
<!--================End Title================ -->

    <!--===================Start left Colum ===================================== ================================-->

     <div class="col_lg_6   left Detalles-producto-img" >
    <form action="./index.php?accio=registrar" method="post" onsubmit="return checkRegistro()" >


                            <!--================Start New Input ================ -->
                            <div class="cont-input">
                                Nombre y Apellidos *<br/>
                                <input class="input-registro" type="text" id="Nombre" name="Nombre" >
                                <span class="span-error" id="ErrorNombre" ></span>
                            </div>
                            <!--================End New Input ================ -->

                            <!--================Start New Input ================ -->
                            <div class="cont-input">

                                 Dirección  <br/>
                                <input class="input-registro" type="text" name="DPostal" >
                                <span class="span-error"></span>
                            </div>
                            <!--================End New Input ================ -->

                            <!--================Start New Input ================ -->
                            <div class="cont-input">
                                Telefono fijo <br/>
                                <input class="input-registro" type="phone" name="TFijo" >
                                <span class="span-error"></span>
                            </div>
                            <!--================End New Input ================ -->

                            <!--================Start New Input ================ -->
                            <div class="cont-input">
                                 Fecha de Nacimieto <br/>
                                <input class="input-registro" type="date" name="FNacimiento" >
                                <span class="span-error"></span>
                            </div>
                        <!--================End New Input ================ -->
                            <!--================Start New Input ================ -->
                            <div class="cont-input">

                                Contraseña * <br/>
                                <input class="input-registro" type="password" id="Password" name="Password" >
                                <span class="span-error" id="ErrorPassword"></span>
                                <p id="mensaje-Error"></p>
                            </div>

                        <!--================End New Input ================ -->
                        
    <!--===================End left Colum ===================================== ================================-->

     </div>
     <div class="col_lg_6 left"  >
                            <!--================Start New Input ================ -->
                            <div class="cont-input2">
                                Poblacion <br/>
                                <input class="input-registro" type="text" name="Poblacio" >
                                <span class="span-error"></span>
                            </div>
                            <!--================End New Input ================ -->

                            <!--================Start New Input ================ -->
                            <div class="cont-input2">
                                Código Postal <br/>
                                <input class="input-registro" type="text" name="CPostal" ></td>
                                <span class="span-error"></span>
                            </div  >
                            <!--================End New Input ================ -->

                            <!--================Start New Input ================ -->
                            <div class="cont-input2">
                                Telefono movil <br/>
                                <input class="input-registro" type="phone" name="TMovil" >
                                <span class="span-error"></span>
                            </div>
                            <!--================End New Input ================ -->
                            <!--================Start New Input ================ -->
                            <div class="cont-input2">
                                Correo Electronico * <br/>
                                <input class="input-registro" type="email"  id="Correo" name="Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                                <span class="span-error" id="ErrorCorreo"></span>
                            </div>
                            <!--================End New Input ================ -->
                            <!--================Start New Input ================ -->
                            <div class="cont-input2">

                            Repetir Contraseña * <br/>
                            <input class="input-registro" type="password" id="Password2" name="Password" >
                            <span class="span-error" id="ErrorPassword2" ></span>
                            <p id="mensaje-Error2"></p>
                            </div>
                            <!--================End New Input ================ -->
                            <div class="cont-input2">


                        <p>Los campos con asteriscos son obligatorios (*) </p>

                            <label id="label-Pdatos">Protección de datos:*</label><input type="checkbox" id="PDatos" name="PDatos" >
                            <br><span class="span-error" id="ErrorPDatos"></span>
                            <input class="input-registro" type="submit" name="envio" value="Aceptar">
                        </div>




         
     </form>
     </div>
     
    
</section>
     <?php

         include'footer.php'; 
         include'includes/Scripts.php'; 
     ?>
</div>

</body>
</html>