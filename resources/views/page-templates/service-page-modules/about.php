
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('witlandingpages_about_title', 'witlandingpages_about_content');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>

<?php 
// Left Side vars:
$wlp_aleft_top = (get_field('witlandingpages_about_left_top')) ? get_field('witlandingpages_about_left_top') : '' ;
$wlp_aleft_middle = (get_field('witlandingpages_about_left_middle')) ? get_field('witlandingpages_about_left_middle') : '' ;
$wlp_aleft_bottom = (get_field('witlandingpages_about_left_bottom')) ? get_field('witlandingpages_about_left_bottom') : '' ;
// Right Side vars:
$witlandingpages_about_title = (get_field('witlandingpages_about_title')) ? get_field('witlandingpages_about_title') : '' ;
$witlandingpages_about_content = (get_field('witlandingpages_about_content')) ? get_field('witlandingpages_about_content') : '' ;

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
?>

<style>
    .servicesRightTitle {
        <?php echo $wlp_align; ?>
    }
</style>

<div class="my-6 servicesAbout laptop:my-12">
    <div class="flex flex-wrap justify-between w-full mx-auto servicesAboutInner max-w-1300 laptop:px-4">
        <div class="flex-1 w-full px-4 mb-4 servicesAboutLeft max-w-650 laptop:px-0 laptop:mb-0 ">
            <div class="px-4 mb-4 servicesAboutLeft aboutLeftTop"><?php echo $wlp_aleft_top ?></div>
            <div class="px-4 mb-4 servicesAboutLeft aboutLeftMiddle"><?php echo $wlp_aleft_middle ?></div>
            <div class="px-4 mb-4 servicesAboutLeft aboutLeftBottom"><?php echo $wlp_aleft_bottom ?></div>
        </div>

        <div class="w-full servicesAboutRight max-w-550 laptop:pl-5">
            <div class="p-5 rounded-none shadow-xl servicesAboutRight bg-blue laptop:rounded-2xl laptop:py-8 laptop:px-10">
                <h3 class="mb-6 text-white servicesRightTitle"><?php echo $witlandingpages_about_title; ?></h3>

                <div class="servicesRightContentText">
					<?php echo $witlandingpages_about_content ?>
                </div>

            </div>
        </div>
    </div>
</div>
