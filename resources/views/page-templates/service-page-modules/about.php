
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('witlandingpages_about_title', 'witlandingpages_about_content');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>

<?php 
$wlp_about_left = (get_field('witlandingpages_about_left')) ? get_field('witlandingpages_about_left') : '' ;
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
        <div class="flex-1 w-full px-4 mb-4 servicesAboutLeft max-w-650 laptop:px-0 laptop:mb-0">
            <?php echo $wlp_about_left ?>
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
