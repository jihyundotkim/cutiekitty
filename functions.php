<?php function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

function mytheme_enqueue_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar Widgets',
		'id'            => 'sidebar-widgets',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
function wpb_custom_new_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function your_prefix_single_post_navigation_same_category( $args ) {
	$args[ 'in_same_term' ] = true;

	return $args;
}

add_filter( 'astra_single_post_navigation', 'your_prefix_single_post_navigation_same_category' );

 ?>
