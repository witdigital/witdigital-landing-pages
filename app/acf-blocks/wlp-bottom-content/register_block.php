<?php
/** @noinspection ALL*/
/**
 * Filename: wlp-bottom-content/register_block.php
 * Description: Register the WLP Bottom Content Block
 * Author: edawson1980
 */

// Load the ACF Fields for this block
include_once 'lib/acf-fields.php';


/*  ==========================================================================
	Register Block
	Ref: https://www.advancedcustomfields.com/resources/acf_register_block_type/
	========================================================================== */

/**
 *  Register ACF block: WLP Bottom Content
 *  ACF/wlp-bottom-content
 *
 */
function wlp_bottom_content_register_blocks() {

	if ( ! function_exists( 'acf_register_block_type' ) ) {
		return;
	}

	acf_register_block_type( array(
		'name'            => 'wlp_bottom_content',
		'title'           => __( 'WLP Bottom Content' ),
		'render_template' => plugin_dir_path( __FILE__ ) . 'views/render_template.php',
		'category'        => 'wit-blocks',
		'icon'            => file_get_contents( plugin_dir_path( __FILE__ ) . '/assets/icon.svg' ),
		'align'           => 'center',
		'description'     => 'Accordion content on the left, Sidebar for locations and (optional) coupon on the right',
		'keywords'        => array( '', '', '' ),
		'supports'        => array(
			'mode'     => true,
			'align'    => array( 'wide', 'full', 'center' ),
			'multiple' => true,
			'jsx'     => true
		),
		'example'           => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'bottom_preview_image' => '/wp-content/plugins/witdigital-landing-pages/app/acf-blocks/wlp-bottom-content/assets/images/bottom-content-preview.png',
				)
			)
		)

	) );
}

add_action( 'acf/init', 'wlp_bottom_content_register_blocks' );

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
