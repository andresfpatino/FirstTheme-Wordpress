<?php get_header(); ?>
<div class="container">
	<div class="row">
		<section class="main col-md-12 ">	
			<div class="row single-post">	
				<article class="col-md-12 post">
						<div class="contenedor">
							<div class="info">
								<h2 class="titulo">ERROR 404. El post que buscas no existe</h2>								
								<div class="extracto">
									<p>Revisa que la url que hayas ingresado sea correcta</p>
									<a href=" <?php bloginfo('url'); ?> "> Regresar a la página de inicio.</a>
								</div>								
							</div>
						</div>
				</article>			
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>