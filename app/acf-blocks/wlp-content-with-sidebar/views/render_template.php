<?php

/*  ==========================================================================
    * Filename: render_template.php
    * Description: Front end for the WLP Content with Sidebar block
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

include_once 'block_styling.php';

/*  ==========================================================================
    Get ACF Values for Content
    ========================================================================== */

// Get the post ID for getting fields if pulling from a post
//$id = get_the_id();

// Left Side vars:
$wlp_aleft_top = (get_field('witlandingpages_about_left_top')) ? get_field('witlandingpages_about_left_top') : '' ;
$wlp_aleft_middle = (get_field('witlandingpages_about_left_middle')) ? get_field('witlandingpages_about_left_middle') : '' ;
$wlp_aleft_bottom = (get_field('witlandingpages_about_left_bottom')) ? get_field('witlandingpages_about_left_bottom') : '' ;
// Right Side vars:
$wlp_aright_title = (get_field('witlandingpages_about_title')) ? get_field('witlandingpages_about_title') : '' ;
$wlp_aright_content = (get_field('witlandingpages_about_content')) ? get_field('witlandingpages_about_content') : '' ;
$witlandingpages_about_title_color = (get_field('witlandingpages_about_title_color')) ? get_field('witlandingpages_about_title_color') : '' ;
$wlp_marker = (get_field('witlandingpages_marker_color')) ? get_field('witlandingpages_marker_color') : 'inherit' ;
// Additional CSS:
$wlp_about_css = (get_field('witlandingpages_about_additional_css')) ? get_field('witlandingpages_about_additional_css') : '' ;

if( have_rows('witlandingpages_about_sidebar_style') ):
    while( have_rows('witlandingpages_about_sidebar_style') ): the_row();

    $wlp_sidebar_background = (get_sub_field('witlandingpages_abt_sidebar_background_color')) ? get_sub_field('witlandingpages_abt_sidebar_background_color') : '' ;
    $wlp_sidebar_border_radius = (get_sub_field('witlandingpages_abt_sidebar_border_radius')) ? get_sub_field('witlandingpages_abt_sidebar_border_radius') : '' ;
    $wlp_sidebar_box_shadow = (get_sub_field('witlandingpages_abt_sidebar_box_shadow')) == '0' ? 'none' : '' ;

    endwhile;
endif;  

$wlp_styles_abt_title = "color: " . $witlandingpages_about_title_color . "!important;";
$wlp_styles_sidebar_background = "background-color: " . $wlp_sidebar_background . ";";
$wlp_styles_sidebar_border_radius = "border-radius: " . $wlp_sidebar_border_radius . "rem;";
$wlp_styles_sidebar_box_shadow = "box-shadow: " . $wlp_sidebar_box_shadow . ";";

// declare alignment variable:
if (get_field('witlandingpages_right_title_alignment') == 'Left') {
    $wlp_align = "text-align: left;";
} else if (get_field('witlandingpages_right_title_alignment') == 'Center') {
    $wlp_align = "text-align: center;";
} else if (get_field('witlandingpages_right_title_alignment') == 'Right') {
    $wlp_align = "text-align: right;";
} else if (get_field('witlandingpages_right_title_alignment') == 'No Align') {
    $wlp_align = "text-align: unset;";
} else {
    $wlp_align = '';
} 

// declare marker variable:
$wlp_li_color = "color: " . $wlp_marker . "!important;";

/*  ==========================================================================
    Define InnerBLocks Template
    ========================================================================== */
// $wlp_content_with_sidebar_template = array(
// 	array('core/heading', array(
// 		'level' => 2,
// 		'placeholder' => 'Title Goes Here',
// 	)),
// 	array( 'core/paragraph', array(
// 		'placeholder' => 'Paragraph Copy',
// 	) )
// );


// Show Preview Image:
if( isset( $block['data']['content_sidebar_preview'] )  ) :    /* rendering in inserter preview  */

    echo '<img src="'. $block['data']['content_sidebar_preview'] .'" style="width:100%; height:auto;">';
endif;
/*  ==========================================================================
    Render the front end
    ========================================================================== */

?>

    <style>
        <?php echo $wlp_about_css ?>
        
        .servicesAboutRightInner {
            <?php echo $wlp_styles_sidebar_background; ?>
            <?php echo $wlp_styles_sidebar_border_radius; ?>
            <?php echo $wlp_styles_sidebar_box_shadow; ?>
        }
        .servicesRightTitle {
            <?php echo $wlp_align; ?>
            <?php echo $wlp_styles_abt_title; ?>
        }
        /* using both marker and before pseudo-elements accounts for different possibilites in targeting */
        .servicesRightContentText ul li::marker {
            <?php echo $wlp_li_color; ?>
        }
        .servicesRightContentText ul li::before {
            <?php echo $wlp_li_color; ?>
        }
    </style>

    <div id="<?php echo $blockID ?>" class="<?php echo esc_attr( $className ); ?>">



        <div class="wlpContentWithSidebar_wrapper">

            <div class="wlpContentWithSidebar_inner">

                <div class="my-8 servicesAbout laptop:my-12">
                    <div class="flex flex-wrap justify-between w-full mx-auto servicesAboutInner max-w-1300 laptop:px-4">
                        <div class="flex-1 w-full px-4 mb-4 servicesAboutLeft max-w-650 laptop:px-0 laptop:mb-0 ">
                            <div class="px-4 mb-4 servicesAboutLeft aboutLeftTop"><?php echo $wlp_aleft_top ?></div>
                            <div class="px-4 mb-4 servicesAboutLeft aboutLeftMiddle"><?php echo $wlp_aleft_middle ?></div>
                            <div class="px-4 mb-4 servicesAboutLeft aboutLeftBottom"><?php echo $wlp_aleft_bottom ?></div>
                        </div>

                        <div class="w-full servicesAboutRight max-w-550 laptop:pl-5">
                            <div class="p-5 rounded-none shadow-2xl servicesAboutRightInner bg-blue laptop:rounded-2xl laptop:py-8 laptop:px-10">
                                <h3 class="mb-6 text-white servicesRightTitle"><?php echo $wlp_aright_title ?></h3>

                                <div class="servicesRightContentText">
                                    <?php echo $wlp_aright_content ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> <!-- End of .servicesAbout -->

            </div> <!-- End of .wlpContentWithSidebar_inner -->

        </div> <!-- End of .wlpContentWithSidebar_wrapper -->

    </div> <!-- End of <?php echo esc_attr( $className ); ?> -->

<?php

/*  ==========================================================================
    Include block specific script
    ========================================================================== */

include_once 'block_scripts.php';

?>
