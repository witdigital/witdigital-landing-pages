
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('witlandingpages_about_title', 'witlandingpages_about_content');
foreach ($parentFields as $field) {
    // conditional translation: If the field has a value, use that value. If that field is empty, use the value of the same field on the page's parent. If that doesn't exist, then this statement evaluates to false and nothing is displayed.
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>

<?php 
// Left Side vars:
$wlp_aleft_top = (get_field('witlandingpages_about_left_top')) ? get_field('witlandingpages_about_left_top') : '' ;
$wlp_aleft_middle = (get_field('witlandingpages_about_left_middle')) ? get_field('witlandingpages_about_left_middle') : '' ;
$wlp_aleft_bottom = (get_field('witlandingpages_about_left_bottom')) ? get_field('witlandingpages_about_left_bottom') : '' ;
// Right Side vars:
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

<div class="my-8 servicesAbout laptop:my-12">
    <div class="flex flex-wrap justify-between w-full mx-auto servicesAboutInner max-w-1300 laptop:px-4">
        <div class="flex-1 w-full px-4 mb-4 servicesAboutLeft max-w-650 laptop:px-0 laptop:mb-0 ">
            <div class="px-4 mb-4 servicesAboutLeft aboutLeftTop"><?php echo $wlp_aleft_top ?></div>
            <div class="px-4 mb-4 servicesAboutLeft aboutLeftMiddle"><?php echo $wlp_aleft_middle ?></div>
            <div class="px-4 mb-4 servicesAboutLeft aboutLeftBottom"><?php echo $wlp_aleft_bottom ?></div>
        </div>

        <div class="w-full servicesAboutRight max-w-550 laptop:pl-5">
            <div class="p-5 rounded-none shadow-2xl servicesAboutRightInner bg-blue laptop:rounded-2xl laptop:py-8 laptop:px-10">
                <h3 class="mb-6 text-white servicesRightTitle"><?php echo $witlandingpages_about_title; ?></h3>

                <div class="servicesRightContentText">
					<?php echo $witlandingpages_about_content ?>
                </div>

            </div>
        </div>
    </div>
</div>
