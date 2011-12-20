<?php
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
}
/** Register sidebars by running starkers_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'widgets_init' );
?>