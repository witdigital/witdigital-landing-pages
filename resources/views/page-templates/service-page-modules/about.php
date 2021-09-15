
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('witlandingpages_about_title', 'witlandingpages_about_subtitle', 'witlandingpages_about_content');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>

<?php 
$services_about_left = (get_field('witlandingpages_about_left')) ? get_field('witlandingpages_about_left') : '' ;
$services_about_right_title = (get_field('witlandingpages_about_title')) ? get_field('witlandingpages_about_title') : '' ;
$services_about_right_subtitle = (get_field('witlandingpages_about_subtitle')) ? get_field('witlandingpages_about_subtitle') : '' ;
$services_about_right_content = (get_field('witlandingpages_about_content')) ? get_field('witlandingpages_about_content') : '' ;
?>

<div class="my-6 servicesAbout laptop:my-12">
    <div class="flex flex-wrap justify-between w-full mx-auto servicesAboutInner max-w-1300 laptop:px-4">
        <div class="flex-1 w-full px-4 mb-4 servicesAboutLeft max-w-650 laptop:px-0 laptop:mb-0">
            <?php echo $services_about_left ?>
        </div>
        <div class="w-full servicesAboutRight max-w-550 laptop:pl-5">
            <div class="p-5 rounded-none servicesAboutRight bg-blue laptop:rounded-2xl add-box-shadow laptop:py-8 laptop:px-10">
                <h5 class="mb-2 servicesRightSmallText text-lightblue laptop:mb-4"><?php echo $services_about_right_title; ?></h5>
                <h3 class="mb-6 text-white servicesRightLargeText"><?php echo $services_about_right_subtitle; ?></h3>

                <div class="servicesRightContentText">
					<?php echo $services_about_right_content ?>
                </div>

            </div>
        </div>
    </div>
</div>
