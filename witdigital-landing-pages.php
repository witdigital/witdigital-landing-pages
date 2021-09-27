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







