<?php

/*
Plugin Name: Wit Digital Landing Pages
Plugin URI: https://witdelivers.com
Description: Provides pages templates and building blocks for landing pages.
Version: 0.0.2
Author: @WitDigital
Text Domain: witlandingpages
*/

/*  ==========================================================================
	Check for composer and load it or disable the plugin
	========================================================================== */
namespace witlandingpages;
if (file_exists(plugin_dir_path(__FILE__).'/vendor/autoload.php')) {
	require plugin_dir_path(__FILE__).'/vendor/autoload.php';
} else {

	function deactivate_plugin_conditional() {

		deactivate_plugins( plugin_dir_path(__FILE__).'index.php' );

		echo '
			<div class="notice notice-error is-dismissible">
	             <p>There was an error activating this plugin. Please contact your sites administrator.</br>Missing autoloader <code>composer install</code></p>
	         
			</div>';


	}
	add_action( 'admin_init', 'witlandingpages\deactivate_plugin_conditional' );

}

/* ==========================================================================
   Include ACF Pro if not ACF does not already exist on the site
   ========================================================================== */
if( ! class_exists('ACF') ) :
	if (file_exists(plugin_dir_path(__FILE__).'vendor/advanced-custom-fields/advanced-custom-fields-pro/acf.php')) :
		require plugin_dir_path(__FILE__).'/vendor/advanced-custom-fields/advanced-custom-fields-pro/acf.php';
	endif;
endif;
/* ==========================================================================
   Plugin Updater
   ========================================================================== */

$MyUpdateChecker = \Puc_v4_Factory::buildUpdateChecker(
	'https://plugins.witdigital.com/wp-update-server/?action=get_metadata&slug=witdigital-landing-pages', //Metadata URL.
	__FILE__, //Full path to the main plugin file.
	'witdigital-landing-pages' //Plugin slug. Usually it's the same as the name of the directory.
);

// pull in ACF JSON
if( file_exists(plugin_dir_path(__FILE__) . 'app/acf_json.php') ) {
	include plugin_dir_path(__FILE__) . 'app/acf_json.php';
}

/* ==========================================================================
   Bring in Setup
   ========================================================================== */
if( file_exists(plugin_dir_path(__FILE__) . 'app/setup.php') ) {
	include plugin_dir_path(__FILE__) . 'app/setup.php';
}






/* ==========================================================================
   Bring in Blocks
   ========================================================================== */
// if( file_exists(plugin_dir_path(__FILE__) . 'app/acf-blocks/acf_blocks.php') ) {
// 	include plugin_dir_path(__FILE__) . 'app/acf-blocks/acf_blocks.php';
// }

/* ==========================================================================
   Bring in Page Templates
   ========================================================================== */

if( file_exists(plugin_dir_path(__FILE__) . 'app/include-page-templates.php') ) {
	include plugin_dir_path(__FILE__) . 'app/include-page-templates.php';
}

/* ==========================================================================
   Bring in Shortcodes
   ========================================================================== */

if( file_exists(plugin_dir_path(__FILE__) . 'app/shortcode.php') ) {
	include plugin_dir_path(__FILE__) . 'app/shortcode.php';
}


// content filter for service page template:

add_filter( 'the_content', 'witlandingpages\insert_service_content' );

function insert_service_content($content) {
	// define variables:
	$wlp_show_hero = (get_field('witlandingpages_show_landing_page_hero')) ? get_field('witlandingpages_show_landing_page_hero') : '' ;
	$wlp_show_intro = (get_field('witlandingpages_show_landing_page_intro')) ? get_field('witlandingpages_show_landing_page_intro') : '' ;
	$wlp_show_content_sidebar = (get_field('witlandingpages_show_lp_content_with_sidebar')) ? get_field('witlandingpages_show_lp_content_with_sidebar') : '' ;
	$wlp_show_cta = (get_field('witlandingpages_show_cta_section')) ? get_field('witlandingpages_show_cta_section') : '' ;
	$wlp_show_panels = (get_field('witlandingpages_show_panels_section')) ? get_field('witlandingpages_show_panels_section') : '' ;
	$wlp_show_accordions = (get_field('witlandingpages_show_accordion_section')) ? get_field('witlandingpages_show_accordion_section') : '' ;
	$wlp_show_testimonials = (get_field('witlandingpages_show_testimonials')) ? get_field('witlandingpages_show_testimonials') : '' ;
	$wlp_hide_elements = (get_field('witlandingpages_hide_page_elements')) ? get_field('witlandingpages_hide_page_elements') : '' ;

	// have to use conditional statement in order to have the hidden-elements.php script fire after jQuery has loaded for the site. it does not appear to matter which priority is given to the hook (re: script firing)
	if( in_the_loop() && is_main_query() && $wlp_show_hero || $wlp_show_intro ) {
		include_once('resources/views/page-templates/service-page-modules/hidden-elements.php');
	} else {
		return $content;
	}

    
}




