<?php

/**
 * Filename: acf_blocks.php
 */

$witcom_breakpoint_md = '1024px';


if( file_exists(plugin_dir_path(__FILE__) . 'wlp-hero-block/register_block.php') ) {
	include plugin_dir_path(__FILE__) . 'wlp-hero-block/register_block.php';
}

if( file_exists(plugin_dir_path(__FILE__) . 'wlp-intro-block/register_block.php') ) {
	include plugin_dir_path(__FILE__) . 'wlp-intro-block/register_block.php';
}

if( file_exists(plugin_dir_path(__FILE__) . 'wlp-content-with-sidebar/register_block.php') ) {
	include plugin_dir_path(__FILE__) . 'wlp-content-with-sidebar/register_block.php';
}

if( file_exists(plugin_dir_path(__FILE__) . 'wlp-cta-block/register_block.php') ) {
	include plugin_dir_path(__FILE__) . 'wlp-cta-block/register_block.php';
}

if( file_exists(plugin_dir_path(__FILE__) . 'wlp-panels-and-photo/register_block.php') ) {
	include plugin_dir_path(__FILE__) . 'wlp-panels-and-photo/register_block.php';
}

if( file_exists(plugin_dir_path(__FILE__) . 'wlp-bottom-content/register_block.php') ) {
	include plugin_dir_path(__FILE__) . 'wlp-bottom-content/register_block.php';
}

if( file_exists(plugin_dir_path(__FILE__) . 'wlp-testimonials-block/register_block.php') ) {
	include plugin_dir_path(__FILE__) . 'wlp-testimonials-block/register_block.php';
}


  // add default image setting to ACF image fields
  
  add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
  function add_default_value_to_image_field($field) {
	  acf_render_field_setting( $field, array(
		  'label'			=> 'Default Image',
		  'instructions'		=> 'Appears when creating a new post',
		  'type'			=> 'image',
		  'name'			=> 'default_value',
	  ));
  }

 // render default image out front:
  
add_filter('acf/load_value/type=image', 'reset_default_image', 10, 3);
function reset_default_image($value, $post_id, $field) {
  if (!$value) {
    $value = $field['default_value'];
  }
  return $value;
}
