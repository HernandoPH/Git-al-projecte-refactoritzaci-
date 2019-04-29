<header >
	
<!-- <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div> -->


<div id="navbar" >
  <div class="ofset_3_right ofset_3_left" >
    <div id="logo">
      <a href="index.php#default" id="logofoto" >
        <img src="View/img/logo.png" class="logo" alt="error" >
      </a>  
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a> 
    </div>
    <div id="navbar-right">
      <a class="active" href="index.php##home">Home</a>
      <a href="index.php##contact">Contact</a>
      <a  id="modal_trigger" href="#modal" >login</a>
      <a href="index.php?accio=registrar">Register</a>
    </div>
  </div>
</div>
<?php   
        include"Controller/Controller-Comprobar-Login.php";
         ?>
</header>