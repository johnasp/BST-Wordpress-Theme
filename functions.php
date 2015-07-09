<?php
/**
 * Theme setup functions for theme
 *
 * @package WordPress
 * @subpackage Blogsonry
 * @since Blogsonry 1.0
 */

/**
 * Load parent CSS styles since we're in a child theme.
 * Parent theme automatically loads child styles.
 */
add_action( 'wp_enqueue_scripts', 'blogsonry_parent_styles' );
function blogsonry_parent_styles() {
	wp_enqueue_style( 'twentythirteen-parent-styles', get_template_directory_uri() . '/style.css', array(), '2013-07-18' );
}

/**
 * Load scripts
 */
add_action( 'wp_enqueue_scripts', 'blogsonry_scripts', 11 );
function blogsonry_scripts() {

	// dequeue old masonry, load new masonry
	wp_dequeue_script( 'jquery-masonry' );

	// custom theme script
	if( is_home() || is_archive() || is_post_type_archive() ) {
		wp_enqueue_script( 'blogsonry-masonry-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'masonry', 'jquery' ), '0.2.0', true );
	}

}

/**
 * Configure infinite scroll to handle our alternate masonry wrapper
 */
add_action( 'init', 'blogsonry_theme_supports' );
function blogsonry_theme_supports() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'primary',
		'type' => 'click',
		'footer_widgets' => 'secondary',
		'footer' => 'colophon'
	) );
	add_theme_support( 'jetpack-responsive-videos' );
}

function blogsonry_body_class( $classes ) {
	if( ( is_home() || is_archive() ) && have_posts() ) {
		// trigger masonry layout & relevant styles
		$classes[] = 'masonry';
		// we hide the sidebar, so remove those styles
		$classes = array_diff( $classes, array( 'sidebar' ) );
	}
	return $classes;
}
add_filter( 'body_class', 'blogsonry_body_class', 11 );