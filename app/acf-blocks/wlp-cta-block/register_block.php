<?php
/** @noinspection ALL*/
/**
 * Filename: wlp-cta-block/register_block.php
 * Description: Register the WLP CTA Block
 * Author: edawson1980
 */

// Load the ACF Fields for this block
include_once 'lib/acf-fields.php';


/*  ==========================================================================
	Register Block
	Ref: https://www.advancedcustomfields.com/resources/acf_register_block_type/
	========================================================================== */

/**
 *  Register ACF block: WLP CTA
 *  ACF/wlp-cta-block
 *
 */
function wlp_cta_block_register_blocks() {

	if ( ! function_exists( 'acf_register_block_type' ) ) {
		return;
	}

	acf_register_block_type( array(
		'name'            => 'wlp_cta_block',
		'title'           => __( 'WLP CTA' ),
		'render_template' => plugin_dir_path( __FILE__ ) . 'views/render_template.php',
		'category'        => 'wit-blocks',
		'icon'            => file_get_contents( plugin_dir_path( __FILE__ ) . '/assets/icon.svg' ),
		'align'           => 'center',
		'description'     => 'Standard CTA section',
		'keywords'        => array( '', '', '' ),
		'supports'        => array(
			'mode'     => true,
			'align'    => array( 'wide', 'full', 'center' ),
			'multiple' => true,
			'jsx'     => true
		),
		'example'		=> array(
			'attributes' => array(
				'mode'	=> 'preview',
				'data'	=> array(
					'cta_preview_image' => '/wp-content/plugins/witdigital-landing-pages/app/acf-blocks/wlp-cta-block/assets/images/cta-block-preview.png',
				)
			)

		)
	) );
}

add_action( 'acf/init', 'wlp_cta_block_register_blocks' );
