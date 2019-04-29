<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php 
		$categories = array("ordinadors","mòbils","tablets");
	?>
	
</head>
<body>

	<ul>	
		<?php foreach ($categories as $categoria)
		{ 
		?>
			<li>
				<h3><?php echo $categoria ?></h3>
			</li>
		<?php 
		}
		?>			
	</ul>


	<ul>
	  <li> <a href=__DIR__./../index.php?accio=portada>Portada</a></li>
	</ul>

</body>
</html>