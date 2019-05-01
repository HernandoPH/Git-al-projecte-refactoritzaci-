<section class="top_slider">
	<div class="seletorcategory" >

		<form action = "index.php?accio=portada#productos" name="formSelectCategory" method="POST" id="formSelectCategory">
			<label>Seleciona Categoria:</label>
			<select onchange="document.formSelectCategory.submit();" name="categoriaSelect" class="SelectCategory">
				<option selected disabled value="">Selecion la categoria</option>
				<option value="">Mostrar todos</option>
				<?php  

					$codi = verOptions();
					echo $codi;

				?>
			</select>
		</form>
	</div>
</section>