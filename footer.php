<footer>

	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Add footer')) : endif; ?>

	<nav class="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 
						wp_nav_menu (array(
							'container' => false,
							'menu_class' => '',
							'items_wrap' => '<ul> %3$s </ul>',
							'theme_location' => 'menu-footer'
						));
					?>
				</div>
			</div>
		</div>
	</nav>

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Desarrollado por Andrés F. Patiño - <a href="https://www.facebook.com/webmmedia/" target="_blank">WebMedia</a> &copy; 2018</p>
				</div>
			</div>
		</div>
	</div>

</footer>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>


<?php wp_footer() ?>

</body>
</html>