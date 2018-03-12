<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,600,700" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/logo.ico">
	<title> 
		<?php 
			if (is_home()){
				echo get_bloginfo('name') . ' | ' . get_bloginfo('description');
			} else if ( is_single()){
				echo the_title();
			} else {
				echo get_bloginfo('name');
			}
		?>		
	</title>

	<?php wp_head(); ?>

</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="logo col-xs-12 col-sm-6">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logo WebmMedia">
					</a>
				</div>
				<div class="redes-sociales col-xs-12 col-sm-6">
					<a class="github" href="#"><i class="fa fa-github"></i></a>
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
		<nav class="menu">
			<div class="container">
				<div class="row">
					<?php 
						wp_nav_menu (array(
							'container' => false,
							'menu_class' => '',
							'items_wrap' => '
								<ul class="col-md-12">
									<li>
										<img class="logo-menu hidden" src="'.get_bloginfo("template_url").'/img/logo-ico.png">
									</li>
									%3$s 
								</ul>
							',
							'theme_location' => 'menutop'
						));
					?>	
				</div>
			</div>
		</nav>


		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Add Superior')) : endif; ?>


	</header>