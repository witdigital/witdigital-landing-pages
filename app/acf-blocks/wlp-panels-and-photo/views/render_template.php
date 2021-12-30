<?php

/*  ==========================================================================
    * Filename: render_template.php
    * Description: Front end for the WLP Panels and Photo block
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

$wlp_panels_main_body = (get_field('witlandingpages_panel_section_main')) ? get_field('witlandingpages_panel_section_main') : '' ;
$wlp_panels_section_img = (get_field('witlandingpages_p_desk')) ? get_field('witlandingpages_p_desk')['url'] : '' ;
// if no mobile image selected, use desktop:
$wlp_panels_mobile_img = (get_field('witlandingpages_p_mobile')) ? get_field('witlandingpages_p_mobile')['url'] : get_field('witlandingpages_p_desk')['url'] ;
$wlp_panels_rad_desk_img = (get_field('witlandingpages_pdesk_border_radius')) ? get_field('witlandingpages_pdesk_border_radius') : '' ;
$wlp_panels_sc = (get_field('witlandingpages_panels_shortcode')) ? do_shortcode (get_field('witlandingpages_panels_shortcode')) : '' ;
$wlp_panels_css = (get_field('witlandingpages_panels_additional_css')) ? get_field('witlandingpages_panels_additional_css') : '' ;

if( have_rows('witlandingpages_panel_styles') ):
    while( have_rows('witlandingpages_panel_styles') ): the_row();

    $wlp_panel_background = (get_sub_field('witlandingpages_panel_background_color')) ? get_sub_field('witlandingpages_panel_background_color') : '' ;
    $wlp_panel_border_radius = (get_sub_field('witlandingpages_panel_border_radius')) ? get_sub_field('witlandingpages_panel_border_radius') : '' ;
    $wlp_panel_title_color = (get_sub_field('witlandingpages_panel_title_color')) ? get_sub_field('witlandingpages_panel_title_color') : '' ;
    $wlp_panel_body_color = (get_sub_field('witlandingpages_panel_body_color')) ? get_sub_field('witlandingpages_panel_body_color') : '' ;

    endwhile;
endif;  

$wlp_styles_panel_background = "background-color: " . $wlp_panel_background . ";";
$wlp_styles_panel_border_radius = "border-radius: " . $wlp_panel_border_radius . "rem;";
$wlp_styles_panel_title = "color: " . $wlp_panel_title_color . "!important;";
$wlp_styles_panel_body = "color: " . $wlp_panel_body_color . ";";
$wlp_styles_rad_desk_img = "border-radius: " . $wlp_panels_rad_desk_img . "rem;";

/*  ==========================================================================
    Define InnerBLocks Template
    ========================================================================== */
// $wlp_panels_and_photo_template = array(
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
        <?php echo $wlp_panels_css ?>
        
        .guaranteeItem {
            
        }
        
        .guaranteeItemInner {
            <?php echo $wlp_styles_panel_background; ?>
            <?php echo $wlp_styles_panel_border_radius; ?>
        }
        .guaranteeItemTitle {
            <?php echo $wlp_styles_panel_title; ?>
        }
        .guaranteeItemText {
            <?php echo $wlp_styles_panel_body; ?>
        }
        .guaranteesInner .desktopOnly {
            <?php echo $wlp_styles_rad_desk_img; ?>
        }
    </style>

    <div id="<?php echo $blockID ?>" class="<?php echo esc_attr( $className ); ?> alignfull">



        <div class="wlpPanelsAndPhoto_wrapper">

            <div class="wlpPanelsAndPhoto_inner">

            <div class="pb-12 guaranteesInner laptop:my-20">
                <div class="z-10 w-full mx-auto guaranteesLeft max-w-1440">
                <div class="guaranteesMobileImage mobileOnly" style="background: url(<?php echo $wlp_panels_mobile_img; ?>) center / cover;"></div>
                    <div class="w-full text-center guaranteesLeftInner max-w-900 laptop:ml-10">
                        <div class="pt-8 mb-10 guaranteesTitle laptop:pt-0"><?php echo $wlp_panels_main_body; ?></div>
                        <div class="flex-wrap justify-between mb-8 guaranteesItems laptop:flex laptop:mb-12">
                            <?php if( have_rows('witlandingpages_panels') ):
                                    while( have_rows('witlandingpages_panels') ): the_row(); 

                                    $wlp_p_image = (get_sub_field('witlandingpages_p_image')) ? get_sub_field('witlandingpages_p_image') : '' ;
                                    $wlp_p_title = (get_sub_field('witlandingpages_p_title')) ? get_sub_field('witlandingpages_p_title') : '' ;
                                    $wlp_p_text = (get_sub_field('witlandingpages_p_text')) ? get_sub_field('witlandingpages_p_text') : '' ;

                                    ?>

                                        <div class="flex-1 px-4 guaranteeItem">

                                            <div class="px-3 py-4 mb-4 text-center guaranteeItemInner bg-blue laptop:pt-6 laptop:pb-8 rounded-xl add-box-shadow laptop:mb-0">
                                                <img class="mx-auto mb-3 max-w-150 max-h-28" src="<?php echo $wlp_p_image ?>" />
                                                <h4 class="mb-2 text-white guaranteeItemTitle laptop:mb-4"><?php echo $wlp_p_title ?></h4>
                                                <div class="text-white guaranteeItemText"><?php echo $wlp_p_text ?></div>
                                            </div>

                                        </div>
                                    <?php endwhile; 

                                endif;
                            ?>
                        </div>
                        <div class="mb-3 laptop:mb-0 panelsButton">

                            <?php echo $wlp_panels_sc ?>

                        </div>
                    </div>
                </div> <!-- End .guaranteesLeft -->

	            <div class="guaranteesRight desktopOnly -z-10" style="background: url(<?php echo $wlp_panels_section_img; ?>) center / cover;"></div>

            </div> <!-- End .guaranteesInner -->

            </div> <!-- End of .wlpPanelsAndPhoto_inner -->

        </div> <!-- End of .wlpPanelsAndPhoto_wrapper -->

    </div> <!-- End of <?php echo esc_attr( $className ); ?> -->

<?php

/*  ==========================================================================
    Include block specific script
    ========================================================================== */

include_once 'block_scripts.php';

?>
