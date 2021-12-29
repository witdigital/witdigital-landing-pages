<?php 
/*  ==========================================================================
    * Filename: render_template.php
    * Description: Front end for the WLP Intro block
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
$wlp_intro_embed = (get_field('witlandingpages_intro_embed')) ? get_field('witlandingpages_intro_embed') : '' ;
$wlp_intro_image = (get_field('witlandingpages_intro_image')) ? get_field('witlandingpages_intro_image')['url'] : '' ;
$wlp_intro_b_rad = (get_field('witlandingpages_intro_border_rad')) ? get_field('witlandingpages_intro_border_rad') : '' ;
$wlp_intro_title = (get_field('witlandingpages_intro_title')) ? get_field('witlandingpages_intro_title') : '' ;
$wlp_intro_title_color = (get_field('witlandingpages_intro_title_color')) ? get_field('witlandingpages_intro_title_color') : '' ;
$wlp_intro_text = (get_field('witlandingpages_intro_text')) ? get_field('witlandingpages_intro_text') : '' ;
$wlp_intro_sc = (get_field('witlandingpages_intro_shortcode')) ? do_shortcode (get_field('witlandingpages_intro_shortcode')) : '' ;
$wlp_intro_css = (get_field('witlandingpages_intro_additional_css')) ? get_field('witlandingpages_intro_additional_css') : '' ;


$wlp_intro_radius = "border-radius: " . $wlp_intro_b_rad . "rem;";
$wlp_styles_intro_title = "color: " . $wlp_intro_title_color ."!important;";


/*  ==========================================================================
    Define InnerBLocks Template
    ========================================================================== */
// $wlp_intro_block_template = array(
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
    <?php echo $wlp_intro_css ?>

    .servicesIntroImage {
        <?php echo $wlp_intro_radius ?>
    }
    .servicesIntroTitle {
        <?php echo $wlp_styles_intro_title ?>
    }
</style>

<div id="<?php echo $blockID ?>" class="<?php echo esc_attr( $className ); ?>">
    <div class="wlpIntroBlock_wrapper">
        <div class="wlpIntroBlock_inner">
            <div class="my-5 servicesIntro laptop:mt-12 laptop:mb-16">
                <div class="servicesIntroInner mx-auto px-4 flex flex-wrap justify-between items-center <?php echo get_field('witlandingpages_image_video') == 'Embed' ? 'embed' : 'image'; ?>">
                    <div class="w-full servicesIntroImageContainer laptop:max-w-400 laptop:pr-10">
                        <?php if(get_field('witlandingpages_image_video') == 'Embed') { ?>
                            <div class="introEmbed">
                                <?php echo $wlp_intro_embed; ?>
                            </div>
                        <?php } else { ?>
                            <div class="servicesIntroImage rounded-2xl" style="background: url(<?php echo $wlp_intro_image ?>) center / cover;"></div>
                        <?php } ?>
                    </div>
                    <div class="w-full mt-3 text-center servicesIntroContent max-w-500 laptop:mt-0 laptop:text-left">
                        <h2 class="mb-3 servicesIntroTitle text-32 laptop:text-42"><?php echo $wlp_intro_title ?></h2>
                        <div class="mb-6 servicesIntroText"><?php echo $wlp_intro_text ?></div>
                        <?php echo $wlp_intro_sc ?>
                    </div>
                </div>
            </div><!-- End .servicesIntro -->
            
        </div><!-- End of .wlpIntroBlock_inner -->
    </div><!-- End of .wlpIntroBlock_wrapper -->
</div><!-- End of <?php echo esc_attr( $className ); ?> -->

<?php

/*  ==========================================================================
    Include block specific script
    ========================================================================== */

include_once 'block_scripts.php';

?>
