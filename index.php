
<?php get_header(); ?>

<div class="container">
	<div class="row">
		<section class="main col-md-8 ">		

			<div class="row titulo-seccion">
				<div class="col-md-12">
					<h3>Lo más reciente</h3>
				</div>
			</div>

			<!-- Posts  -->
			<div class="row posts">
				<?php if(have_posts() ) : while(have_posts()) : the_post(); ?>
				<!-- articulo -->
				<article class="col-md-6 post">
						<div class="contenedor">
							<div class="thumb">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail() ) { the_post_thumbnail ('homepage-thumb');} ?>
								</a>
							</div>
							<div class="info">
								<a href=" <?php the_permalink(); ?> "><h2 class="titulo"><?php the_title(); ?></h2></a>
								<p class="fecha"> <?php echo get_the_date(); ?> </p>
								<div class="extracto"> <?php echo the_excerpt(); ?> </div>
								<div class="categorias">
									<?php the_category(); ?>
								</div>
							</div>
						</div>
				</article>
				<?php endwhile; else:  ?>				
				<!-- no hay articulos -->
				<article class="col-md-6 post">
						<div class="contenedor">
							<div class="info">
								<h2 class="titulo">El post no buscas no existe</h2>								
								<div class="extracto"> Revisa que la url que hayas ingresado sea correcta </div>								
							</div>
						</div>
				</article>
				<?php endif; ?>
			</div>

			<!-- Paginación -->
			<section class="row paginacion">
				<div class="col-md-12">
					<div class="pagination">
						<?php wp_pagenavi(); ?>
					</div>
				</div>
			</section>

		</section>

		<!-- Sidebar -->
		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>