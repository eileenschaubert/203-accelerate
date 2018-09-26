<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
	wp_enqueue_style ('accelerate-child-google-fonts', '//fonts.googleapis.com/css?family=Londrina+Solid:400,900"');
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// Enqueue font awesome for icons via CDN
function custom_load_font_awesome() {
    wp_enqueue_style( 'font-awesome-free', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );


// Custom post types function
function create_custom_post_types() {
	// Add a custom post type for case studies
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
		// Add a custom post type for services listed on the about page
		register_post_type( 'services_offered',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'services' ),
        )
    );

}
add_action( 'init', 'create_custom_post_types' );
