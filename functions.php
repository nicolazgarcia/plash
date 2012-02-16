<?php
add_theme_support('post-thumbnails');
add_image_size('leader-thumb', 189, 189, true);
add_image_size('latest-thumb', 75, 75, true);
add_image_size('look-thumb', 272, 196, true);
add_image_size('product-thumb', 160, 160);
add_image_size('contest-thumb', 144, 144, true);
add_image_size('contest-full', 250, 300);

/*
 * jQuery desde Google
 */
function my_jquery() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', false, '1.7.1');
    wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'my_jquery');

/*
 * Register widgetized areas.
 */
function widgets_init() {
	// Area 0, texto home.
	register_sidebar( array(
		'name' => 'Home',
		'id' => 'home-widget-area',
		'description' => 'Area para texto home',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
	// Area 0, video tips.
	register_sidebar( array(
		'name' => 'Video',
		'id' => 'video-widget-area',
		'description' => 'Area para video tips',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}
/** Register sidebars by running starkers_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'widgets_init' );

// Registrar post types
add_action( 'init', 'create_type_concursante' );

function create_type_concursante() {
	register_post_type( 'concursante',
	array(
		'labels' => array(
			'name' => 'Concursantes',
			'singular_name' => 'Concursante'
			),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_position' => 20,
		'rewrite' =>  array(
			'slug' => 'concursante',
			'with_front' => true
			),
		'has_archive' => 'concurso'
		)
	);
}
?>