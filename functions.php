
<?php 

// Agregamos soporte para los thumbnails
add_theme_support( 'post-thumbnails' );

// Agregamos el tamaño de la imagen y permitimos que la imagen se corte si no cabe.
add_image_size( 'homepage-thumb', 745, 372 , true);


// Registramos el menu
register_nav_menus( array(
	"menutop" => "Menu principal",
	"menu-footer" => "Menu Footer"
));



// registramoslos widgets

register_sidebar(array(
	'name' => 'Add Superior',
	'before_widget' => '<div class="ad container hidden-xs"><div class="row"><div class="col-md-12">',
	'after_widget' => '</div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'

));

register_sidebar(array(
	'name' => 'Add Sidebar',
	'before_widget' => '<div class="widget ad"><div class="titulo-seccion">',
	'after_widget' => '</div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'

));

register_sidebar(array(
	'name' => 'Add footer',
	'before_widget' => '<div class="ad container hidden-xs"><div class="row"><div class="col-md-12">',
	'after_widget' => '</div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'

));

register_sidebar(array(
	'name' => 'Redes sidebar',
	'before_widget' => '<div class="widget redes-sociales"><div class="titulo-seccion"><div class="redes-sociales">',
	'after_widget' => '</div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'

));

register_sidebar(array(
	'name' => 'Boletin',
	'before_widget' => '<div class="widget boletin"><div class="titulo-seccion"><form class="formulario">',
	'after_widget' => '</div></div></form>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'

));





// register_sidebar(array(
// 	'name' => 'Add inferior',
// 	'before_widget' => '<div>',
// 	'after_widget' => '</div>',
// 	'before_title' => '<h3>',
// 	'after_title' => '</h3>'

// ));


// register_sidebar(array(
// 	'name' => 'Footer',
// 	'before_widget' => '<div>',
// 	'after_widget' => '</div>',
// 	'before_title' => '<h3>',
// 	'after_title' => '</h3>'

// ));





 ?>