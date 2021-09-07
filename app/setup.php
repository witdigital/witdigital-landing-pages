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
function custom_style_adding_function() {
	wp_enqueue_style(
		'wit_landing_pages_styles', plugins_url( '../dist/css/witdigital-landing-pages-styles.css', __FILE__ ),
		array(),
		false,
		'all'
	);
}


/* ==========================================================================
   Enqueue scripts and styles only for specific page template(s)
   ========================================================================== */

// get the template slug (is_page_template does not work with how do create the page template)
$template_slug = get_page_template_slug();

if ( $template_path = 'landing-page-template.php' ) {

	add_action( 'wp_enqueue_scripts', 'witlandingpages\custom_style_adding_function' );
	add_action( 'admin_enqueue_scripts', 'witlandingpages\wit_landing_pages_enqueue_script' );
}


/* Shortcode for Phone Number: */

function witlandingpages_phone_button($atts) {
	extract(shortcode_atts(array(
		'class' => '',
	), $atts));
	// assign vars with logic:
	$phone_1_href = (get_field('phone_1_href')) ? get_field('phone_1_href') : '' ;
	$phone_2_href = (get_field('phone_2_href')) ? get_field('phone_2_href') : '' ;
	$phone_1_display = (get_field('phone_1_display')) ? get_field('phone_1_display') : '' ;
	$phone_2_display = (get_field('phone_2_display')) ? get_field('phone_2_display') : '' ;
	$phone_1_location = (get_field('phone_1_location')) ? get_field('phone_1_location') : '' ;
	$phone_2_location = (get_field('phone_2_location')) ? get_field('phone_2_location') : '' ;
	$classes = (get_field('call_button_anchor_class')) ? get_field('call_button_anchor_class') : '' ;
	$call_button_icon = (get_field('call_button_icon')) ? get_field('call_button_icon') : '' ;
	

	$phoneDisplay = '
	<div class="phoneBtns">
		<div class="phoneBtnItem">
			<span class="phoneBtnItemLocation">' . $location1 . '</span>
			<a href="tel:' . $href1 . '" class="phoneBtn btn ' . $class . ' ' . $classes . '"><img class="iconImage phoneBtnImage align-middle" src="' . $icon . '" /> <span class= text-blue">' . $display1 . '</span><span class="mobileOnly">' . $location1 . '</span></a>
		</div>
		<div class="phoneBtnItem">
			<span class="phoneBtnItemLocation">' . $location2 . '</span>
			<a href="tel:' . $href2 . '" class="phoneBtn btn ' . $class . ' ' . $classes . '"><img class="iconImage phoneBtnImage align-middle" src="' . $icon . '" /> <span class= text-blue">' . $display2 . '</span><span class="mobileOnly">' . $location2 . '</span></a>
		</div>
	</div>';
	return $phoneDisplay;
}
add_shortcode('witlandingpages_phone_button', 'witlandingpages_phone_button');
