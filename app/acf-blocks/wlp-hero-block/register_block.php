<?php
/** @noinspection ALL*/
/**
 * Filename: wlp-hero-block/register_block.php
 * Description: Register the WLP Hero Block Block
 * Author: edawson1980
 */

// Load the ACF Fields for this block
include_once 'lib/acf-fields.php';


/*  ==========================================================================
	Register Block
	Ref: https://www.advancedcustomfields.com/resources/acf_register_block_type/
	========================================================================== */

/**
 *  Register ACF block: WLP Hero Block
 *  ACF/wlp-hero-block
 *
 */
function wlp_hero_block_register_blocks() {

	if ( ! function_exists( 'acf_register_block_type' ) ) {
		return;
	}

	acf_register_block_type( array(
		'name'            => 'wlp_hero_block',
		'title'           => __( 'WLP Hero Block' ),
		'render_template' => plugin_dir_path( __FILE__ ) . 'views/render_template.php',
		'category'        => 'wit-blocks',
		'icon'            => file_get_contents( plugin_dir_path( __FILE__ ) . '/assets/icon.svg' ),
		'align'           => 'center',
		'description'     => 'A hero image with a header and optional phone number',
		'keywords'        => array( '', '', '' ),
		'supports'        => array(
			'mode'     => false,
			'align'    => array( 'wide', 'full', 'center' ),
			'multiple' => true,
			'jsx'     => true
		),
		'example'           => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'hero_preview_image' => '/wp-content/plugins/witdigital-landing-pages/app/acf-blocks/wlp-hero-block/assets/images/hero-preview.png',
					
				)
			)
		)
	) );
}

add_action( 'acf/init', 'wlp_hero_block_register_blocks' );
