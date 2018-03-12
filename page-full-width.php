<?php 
	/* Template Name: Full Width */
 ?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<section class="main col-md-12 ">
			<!-- Posts  -->
			<div class="row single-post">
				<?php if(have_posts() ) : while(have_posts()) : the_post(); ?>
				<!-- articulo -->
				<article class="col-md-12 post">
					<div class="contenedor">
						<div class="row info">
							<h2 class="titulo"><?php the_title(); ?></h2>
							<div class="texto"> <?php echo the_content(); ?> </div>
						</div>
					</div>
				</article>
				<?php endwhile; else:  ?>				
				<!-- no hay articulos -->
				<article class="col-md-12 post">
						<div class="contenedor">
							<div class="info">
								<h2 class="titulo">El post que buscas no existe</h2>								
								<div class="extracto"> Revisa que la url que hayas ingresado sea correcta </div>								
							</div>
						</div>
				</article>
				<?php endif; ?>
			</div>
		</section>
	</div>
</div>

<?php get_footer(); ?>