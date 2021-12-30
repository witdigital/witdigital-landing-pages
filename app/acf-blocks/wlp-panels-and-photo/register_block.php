<?php
/** @noinspection ALL*/
/**
 * Filename: wlp-panels-and-photo/register_block.php
 * Description: Register the WLP Panels and Photo Block
 * Author: edawson1980
 */

// Load the ACF Fields for this block
include_once 'lib/acf-fields.php';


/*  ==========================================================================
	Register Block
	Ref: https://www.advancedcustomfields.com/resources/acf_register_block_type/
	========================================================================== */

/**
 *  Register ACF block: WLP Panels and Photo
 *  ACF/wlp-panels-and-photo
 *
 */
function wlp_panels_and_photo_register_blocks() {

	if ( ! function_exists( 'acf_register_block_type' ) ) {
		return;
	}

	acf_register_block_type( array(
		'name'            => 'wlp_panels_and_photo',
		'title'           => __( 'WLP Panels and Photo' ),
		'render_template' => plugin_dir_path( __FILE__ ) . 'views/render_template.php',
		'category'        => 'wit-blocks',
		'icon'            => file_get_contents( plugin_dir_path( __FILE__ ) . '/assets/icon.svg' ),
		'align'           => 'center',
		'mode'            => 'preview',
		'keywords'        => array( '', '', '' ),
		'supports'        => array(
			'mode'     => true,
			'align'    => array( 'wide', 'full', 'center' ),
			'multiple' => true,
			'jsx'     => true
		)
	) );
}

add_action( 'acf/init', 'wlp_panels_and_photo_register_blocks' );
