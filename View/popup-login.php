
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Popup Login & Signup with jQuery</title>
  	<?php
		include 'includes/metas.php';
    ?>

</head>
<body>

	
  <div class="container">
  		
		<div id="modal" class="popupContainer" style="display:block;">

				<div class="popupHeader">
						<span class="header_title">Login</span>
						<span class="modal_close"><i class="fa fa-times"></i></span>
				</div>
				
				<section class="popupBody">
				<?php 
					echo $_sMensaje;
				 ?>
						<!--..... Comienza  Login form .....................................-->
						<div class="user_login">

								<form id="form-login"  method="post" action="index.php?accio=login" onsubmit="return checkLogin()">
										<label>Email</label>
										<input class="input-registro" type="email"  id="login-Correo" name="login-Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                                		<span class="span-error" id="login-ErrorCorreo"></span><br/>

										<label>Password</label>
										<input class="input-registro" type="password"  id="login-Password" name="login-Password" />
                                		<span class="span-error" id="login-ErrorPassword"></span>		<br />

										

										<div class="action_btns">

												<div id="login-div" class="one_half last"><a class="btn btn_red">
												<input type="submit" name="" value="Login" style="width: 132px;margin-left: -20px;height: 44px;margin-top: -11px;background: transparent;border: transparent;color: #666;" ></a></div>
												<div class="one_half"><a href="index.php?accio=registrar" class="btn back_btn">Registrarse</a></div>
												
										</div>
								</form>

						</div>

						<!--..... END  Login form................................................................................................... -->
					
				</section>
		</div>
</div>

<?php 
include 'includes/Scripts.php';
?>

</body>

</html>
