<?php
/** @noinspection ALL*/
/**
 * Filename: wit-acf-starter-block/register_block.php
 * Description: Register the Wit ACF Starter Block Block
 * Author: @witdelivers
 */

// Load the ACF Fields for this block
include_once 'lib/acf-fields.php';


/*  ==========================================================================
	Register Block
	Ref: https://www.advancedcustomfields.com/resources/acf_register_block_type/
	========================================================================== */

/**
 *  Register ACF block: Wit ACF Starter Block
 *  ACF/wit-acf-starter-block
 *
 */
function wit_acf_starter_block_register_blocks() {

	if ( ! function_exists( 'acf_register_block_type' ) ) {
		return;
	}

	acf_register_block_type( array(
		'name'            => 'wit_acf_starter_block',
		'title'           => __( 'Wit ACF Starter Block' ),
		'render_template' => plugin_dir_path( __FILE__ ) . 'views/render_template.php',
		'category'        => 'media',
		'icon'            => file_get_contents( plugin_dir_path( __FILE__ ) . '/assets/icon.svg' ),
		'align'           => 'center',
		'mode'            => 'preview',
		'keywords'        => array( '', '', '' ),
		'supports'        => array(
			'mode'     => true,
			'align'    => array( 'wide', 'full', 'center' ),
			'multiple' => true,
		)
	) );
}

add_action( 'acf/init', 'wit_acf_starter_block_register_blocks' );
