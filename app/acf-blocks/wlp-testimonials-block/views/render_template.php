<?php

/*  ==========================================================================
    * Filename: render_template.php
    * Description: Front end for the WLP Testimonials block
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

$wlp_testimonials_img = (get_field('witlandingpages_testimonials_bkgrnd')) ? get_field('witlandingpages_testimonials_bkgrnd')['url'] : '' ;
$wlp_testimonials_title = (get_field('witlandingpages_testimonials_title')) ? get_field('witlandingpages_testimonials_title') : '' ;
$wlp_testimonials_title_color = (get_field('witlandingpages_testimonials_title_color')) ? get_field('witlandingpages_testimonials_title_color') : '' ;
$wlp_testBtn_href = (get_field('witlandingpages_testimonials_link')) ? get_field('witlandingpages_testimonials_link') : '' ;
$wlp_testBtn_text = (get_field('witlandingpages_testimonials_btn_text')) ? get_field('witlandingpages_testimonials_btn_text') : '' ;
$wlp_testimonials_sc = (get_field('witlandingpages_testimonials_shortcode')) ? do_shortcode (get_field('witlandingpages_testimonials_shortcode')) : get_field('witlandingpages_testimonials_shortcode') ;
// $wlp_testimonials_sc = (get_field('witlandingpages_testimonials_shortcode')) ? do_shortcode (get_field('witlandingpages_testimonials_shortcode')) : 'words GO HERE.' ;

$wlp_test_overlay_class = (get_field('witlandingpages_overlay_testimonials')) == 'Color' ? 'testColorOverlay' : 'testGradientOverlay' ;
$wlp_test_overlay_color = (get_field('witlandingpages_overlay_color_testimonials')) ? get_field('witlandingpages_overlay_color_testimonials') : '' ;
$wlp_test_overlay_gradient = (get_field('witlandingpages_overlay_gradient_testimonials')) ? get_field('witlandingpages_overlay_gradient_testimonials') : '' ;

$wlp_styles_test_over_color = "background: " . $wlp_test_overlay_color . '!important;';
$wlp_styles_test_gradient = "background: " . $wlp_test_overlay_gradient . '!important;';
$wlp_styles_test_title_color = "color: " . $wlp_testimonials_title_color . "!important;";

// All Reviews Button Variables:
if( have_rows('witlandingpages_testimonials_button_styling') ) :
	while( have_rows('witlandingpages_testimonials_button_styling') ): the_row();

	$wlp_test_btn_background = (get_sub_field('witlandingpages_testimonial_button_background')) ? get_sub_field('witlandingpages_testimonial_button_background') : '' ;
	$wlp_test_btn_border_radius = (get_sub_field('witlandingpages_testimonial_button_border_radius')) ? get_sub_field('witlandingpages_testimonial_button_border_radius') : '1' ;
	$wlp_test_btn_border_color = (get_sub_field('witlandingpages_testimonial_button_border_color')) ? get_sub_field('witlandingpages_testimonial_button_border_color') : 'white' ;
	$wlp_test_btn_color = (get_sub_field('witlandingpages_testimonial_button_link_color')) ? get_sub_field('witlandingpages_testimonial_button_link_color') : '' ;

	endwhile;
endif; 

// All Reviews Button Styling Variables:
$wlp_styles_test_btn_bkgrnd = "background-color: " . $wlp_test_btn_background . ";";
$wlp_styles_test_btn_rad = "border-radius: " . $wlp_test_btn_border_radius . "rem;";
$wlp_styles_test_btn_border_color = "border-color: " . $wlp_test_btn_border_color . "!important;";
$wlp_styles_test_btn_color = "color: " . $wlp_test_btn_color . "!important;";

// Additional CSS:
$wlp_test_css = (get_field('witlandingpages_test_additional_css')) ? get_field('witlandingpages_test_additional_css') : '' ;


/*  ==========================================================================
    Define InnerBLocks Template
    ========================================================================== */
// $wlp_testimonials_block_template = array(
// 	array('core/heading', array(
// 		'level' => 2,
// 		'placeholder' => 'Title Goes Here',
// 	)),
// 	array( 'core/paragraph', array(
// 		'placeholder' => 'Paragraph Copy',
// 	) )
// );


// Show Preview Image:
if( isset( $block['data']['testimonials_preview_image'] )  ) :    /* rendering in inserter preview  */

    echo '<img src="'. $block['data']['testimonials_preview_image'] .'" style="width:100%; height:auto;">';
endif;
/*  ==========================================================================
    Render the front end
    ========================================================================== */

?>

    <style>
        <?php echo $wlp_test_css ?>
        
        .testColorOverlay {
            <?php echo $wlp_styles_test_over_color ?>
        }
        .testGradientOverlay {
            <?php echo $wlp_styles_test_gradient ?>
        }
        .testimonialsTitle {
            <?php echo $wlp_styles_test_title_color ?>
        }
        .testimonialContent a{
            <?php echo $wlp_styles_test_btn_bkgrnd ?>
            <?php echo $wlp_styles_test_btn_rad ?>
            <?php echo $wlp_styles_test_btn_border_color ?>
            <?php echo $wlp_styles_test_btn_color ?>
        }
        .testimonialContent a:hover {
            cursor: pointer;
        }
    </style>

    <div id="<?php echo $blockID ?>" class="<?php echo esc_attr( $className ); ?> alignfull">



        <div class="wlpTestimonialsBlock_wrapper">

            <div class="wlpTestimonialsBlock_inner">

                <div class="relative py-12 testimonialsInner laptop:mt-64" style="background: url(<?php echo $wlp_testimonials_img ?>) center / cover;">
                    <div class="overlay altOverlay <?php echo $wlp_test_overlay_class ?>"></div>
                    <div class="px-4 mx-auto testimonialContent max-w-1150">
                        <h2 class="text-center text-white testimonialsTitle"><?php echo $wlp_testimonials_title ?></h2>
                        <div class="my-10 text-center text-white testimonialShortcode">
                            <?php echo $wlp_testimonials_sc ?>
                        </div>
                        <a class="block px-3 py-2 mx-auto my-0 text-base font-bold leading-none text-center text-white uppercase border border-white rounded-md btn" href="<?php echo $wlp_testBtn_href ?>"><?php echo $wlp_testBtn_text ?></a>
                    </div>
                </div><!-- End .testimonialsInner -->

            </div> <!-- End of .wlpTestimonialsBlock_inner -->

        </div> <!-- End of .wlpTestimonialsBlock_wrapper -->

    </div> <!-- End of <?php echo esc_attr( $className ); ?> -->

<?php

/*  ==========================================================================
    Include block specific script
    ========================================================================== */

include_once 'block_scripts.php';

?>
