<?php

/*  ==========================================================================
    * Filename: render_template.php
    * Description: Front end for the WLP CTA block
    * Author: edawson1980
    *

    [Table of contents]

    1. Define block specific Vars
    2. Include block specific styling
    3. Create the hooks for this view
    4. Get ACF Values for Content
    5. Render the front end
    6. Include block specific script

    ========================================================================== */

/* ==========================================================================
	Define block specific Vars
    Build ID and Class names.
   ========================================================================== */

if ( ! empty( $block ) ) {
	//  This instances ID
	$blockID = $block['id'];
	//  The block name
	$blockName = $block['name'];
	// replace forward slash in block name for better compatibility
	$blockName = str_replace( '/', '_', $blockName );
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'wlp-blocks ' . $blockName . ' ' . $blockID;
if ( ! empty( $block['className'] ) ) {
	$className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$className .= ' align' . $block['align'];
}

/*  ==========================================================================
	Include block specific styling
	========================================================================== */

// include_once 'block_styling.php';

/*  ==========================================================================
    Get ACF Values for Content
    ========================================================================== */

// Get the post ID for getting fields if pulling from a post
//$id = get_the_id();

$services_cta_image_alt = (get_field('witlandingpages_cta_image')) ? get_field('witlandingpages_cta_image')['alt'] : '' ;
$wlp_cta_image = (get_field('witlandingpages_cta_image')) ? get_field('witlandingpages_cta_image')['url'] : '' ;
$wlp_cta_title = (get_field('witlandingpages_cta_title')) ? get_field('witlandingpages_cta_title') : '' ;
$wlp_cta_content = (get_field('witlandingpages_cta_content')) ? get_field('witlandingpages_cta_content') : '' ;
$wlp_cta_sc = (get_field('witlandingpages_cta_shortcode')) ? do_shortcode (get_field('witlandingpages_cta_shortcode')) : '' ;

$wlp_cta_background_class = (get_field('witlandingpages_cta_background')) == 'Color' ? 'ctaColorOverlay' : 'ctaGradientOverlay' ;
$wlp_cta_background_color = (get_field('witlandingpages_cta_background_color')) ? get_field('witlandingpages_cta_background_color') : '' ;
$wlp_cta_background_gradient = (get_field('witlandingpages_cta_background_gradient')) ? get_field('witlandingpages_cta_background_gradient') : '' ;
$wlp_cta_css = (get_field('witlandingpages_cta_additional_css')) ? get_field('witlandingpages_cta_additional_css') : '' ;

$wlp_cta_bkgnd_color = "background: " . $wlp_cta_background_color . '!important;';
$wlp_cta_gradient = "background: " . $wlp_cta_background_gradient . '!important;';

/*  ==========================================================================
    Define InnerBLocks Template
    ========================================================================== */
// $wlp_cta_block_template = array(
// 	array('core/heading', array(
// 		'level' => 2,
// 		'placeholder' => 'Title Goes Here',
// 	)),
// 	array( 'core/paragraph', array(
// 		'placeholder' => 'Paragraph Copy',
// 	) )
// );



/*  ==========================================================================
    Render the front end
    ========================================================================== */

?>

    <style>
        <?php echo $wlp_cta_css ?>
        
        .ctaColorOverlay {
            <?php echo $wlp_cta_bkgnd_color ?>
        }
        .ctaGradientOverlay {
            <?php echo $wlp_cta_gradient ?>
        }
    </style>

    <div id="<?php echo $blockID ?>" class="<?php echo esc_attr( $className ); ?>">



        <div class="wlpCtaBlock_wrapper">

            <div class="wlpCtaBlock_inner">

                <div class="mt-24 servicesCTA bg-grey laptop:mt-auto pb-10 laptop:pb-0 <?php echo $wlp_cta_background_class ?>">
                    <div class="flex-wrap justify-between w-full px-4 py-8 mx-auto servicesCTAInner max-w-1300 laptop:flex ">
                        <div class="flex-1 w-full servicesCTALeft max-w-600 laptop:pr-5">
                            <img class="max-w-full" src="<?php echo $wlp_cta_image ?>" alt="<?php echo $services_cta_image_alt; ?>" />
                        </div>
                        <div class="w-full text-center servicesCTARight max-w-650 laptop:pl-1">
                            <div class="servicesCTATitle"><?php echo $wlp_cta_title; ?></div>
                            <div class="my-5 servicesCTAText">
                                <?php echo $wlp_cta_content; ?>
                            </div>
                    
                            <?php echo $wlp_cta_sc ?>
                            
                        </div>
                    </div>
                </div> <!-- End .servicesCTA -->

            </div> <!-- End of .wlpCtaBlock_inner -->

        </div> <!-- End of .wlpCtaBlock_wrapper -->

    </div> <!-- End of <?php echo esc_attr( $className ); ?> -->

<?php

/*  ==========================================================================
    Include block specific script
    ========================================================================== */

include_once 'block_scripts.php';

?>
