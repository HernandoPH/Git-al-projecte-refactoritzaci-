<?php 
  //include("../Controller/Controller-insertar-registro.php");
 ?>
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

     <div id="container-registro">
        
        <div id="Formulario-Registro">
            <h2 id="titulo-eventos-index">Modificar Usuario</h2>
        
            <form action="index.php?accio=Modificar_user" method="post" onsubmit="return checkModificarUser()" >
                <table   class="registro">
                    <tr>
                        <td>
                            Nombre y Apellidos *<br/>
                            <input class="input-registro" type="text" id="Nombre" name="Nombre" >
                            <span class="span-error" id="ErrorNombre" ></span>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Dirección  <br/>
                            <input class="input-registro" type="text" name="DPostal" >
                            <span class="span-error"></span>

                        </td>
                        <td>
                            Poblacion <br/>
                            <input class="input-registro" type="text" name="Poblacio" >
                            <span class="span-error"></span>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Código Postal <br/>
                            <input class="input-registro" type="text" name="CPostal" ></td>
                            <span class="span-error"></span>

                        <td>
                            Telefono movil <br/>
                            <input class="input-registro" type="phone" name="TMovil" >
                            <span class="span-error"></span>

                        </td>
                    </tr>
                    <tr>
                            <td>Telefono fijo <br/>
                            <input class="input-registro" type="phone" name="TFijo" ></td>
                            <span class="span-error"></span>

                            <td>
                                Fecha de Nacimieto <br/>
                                <input class="input-registro" type="date" name="FNacimiento" >
                                <span class="span-error"></span>

                            </td>
                    </tr>
                    <tr>
                            <td>
                                Contraseña * <br/>
                                <input class="input-registro" type="password" id="Password" name="Password" >
                                <span class="span-error" id="ErrorPassword"></span>

                            </td>
                            <td>
                                Repetir Contraseña * <br/>
                                <input class="input-registro" type="password" id="Password2" name="Password" >
                                <span class="span-error" id="ErrorPassword2" ></span>


                                   
                            </td>
                    </tr>
                    
                   
                    
                    <tr>
                        <td>
                            <input class="input-registro" type="submit" name="aceptar" value="Aceptar">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                    </tr>
            </table>
        </form>
        

       
    </div>
    <div id="footer-registro">
     <?php

         include'footer.php'; 
         include'includes/Scripts.php'; 
     ?>
     </div>
    </div>
</body>
</html>