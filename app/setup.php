<?php
/**
 * Filename: setup.php
 * Description:
 * Author:  Ryan E. Mitchell
 */

namespace witlandingpages;
// Scripts
function wit_landing_pages_enqueue_script() {
	wp_enqueue_script( 'wit_landing_pages_script', plugins_url( '../dist/js/witdigital-landing-pages-scripts.js', __FILE__ ),
		array( 'jquery' ),
		'1.0.0',
		true );
}

// Styles
// function custom_style_adding_function() {
// 	wp_enqueue_style(
// 		'wit_landing_pages_styles', plugins_url( '../dist/css/witdigital-landing-pages-styles.css', __FILE__ ),
// 		array(),
// 		false,
// 		'all'
// 	);
// }

// set up Options Page:
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' => 'Wit Landing Page Global Settings',
		'menu_title' => 'Landing Pages',
	));

}

/* ==========================================================================
   Enqueue scripts and styles only for specific page template(s)
   ========================================================================== */

// get the template slug (is_page_template does not work with how do create the page template)
$template_slug = get_page_template_slug();

if ( $template_path = 'landing-page-template.php' ) {

	add_action( 'wp_enqueue_scripts', 'witlandingpages\custom_style_adding_function' );
	add_action( 'wp_enqueue_scripts', 'witlandingpages\wit_landing_pages_enqueue_script' );
}
