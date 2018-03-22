<?php
function my_theme_scripts() {
    wp_enqueue_script( 'vaehk_scripts', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.1', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

function register_menu() {
  register_nav_menu('main-menu',__( 'Main menu' ));
}
add_action( 'init', 'register_menu' );

function editable_footer() {
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'blanktheme' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'blanktheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'blanktheme' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'blanktheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'editable_footer' );

function sidebar_widget() {
	register_sidebar( array(
		'name' => __( 'First Sidebar Widget Area', 'blanktheme' ),
		'id' => 'first-sidebar-widget-area',
		'description' => __( 'The first sidebar widget area', 'blanktheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));	
}
add_action( 'widgets_init', 'sidebar_widget' );

add_theme_support( 'post-thumbnails' );
function vaehk_setup() {
	add_theme_support( 'custom-logo', array(
		'height' => 62,
		'width' => 60,
		'flex-height' => true,
		'flex-width' => true,
	));
}
add_action('after_setup_theme', 'vaehk_setup');

function vaehk_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
// removes static size on thumnail images
function remove_img_attr ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );

/* thumnail size, unlimited width, 322 pixels height */
add_image_size('vaehk_thumbnail', 9999, 322, false);
?>