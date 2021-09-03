
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('services_about_right_title', 'services_about_right_subtitle', 'services_about_right_content');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>

<?php 
$services_about_left = (get_field('services_about_left')) ? get_field('services_about_left') : '' ;
$services_about_right_title = (get_field('services_about_right_title')) ? get_field('services_about_right_title') : '' ;
$services_about_right_subtitle = (get_field('services_about_right_subtitle')) ? get_field('services_about_right_subtitle') : '' ;
$services_about_right_content = (get_field('services_about_right_content')) ? get_field('services_about_right_content') : '' ;
?>

<div class="servicesAbout my-6 laptop:my-12">
    <div class="servicesAboutInner max-w-1300 w-full mx-auto laptop:px-4 flex flex-wrap justify-between">
        <div class="servicesAboutLeft flex-1 max-w-650 w-full px-4 laptop:px-0">
            <?php echo $services_about_left ?>
        </div>
        <div class="servicesAboutRight max-w-550 w-full laptop:pl-5">
            <div class="servicesAboutRight bg-blue rounded-2xl add-box-shadow p-5 laptop:py-8 laptop:px-10">
                <h5 class="servicesRightSmallText text-lightblue mb-2 laptop:mb-4"><?php echo $services_about_right_title; ?></h5>
                <h3 class="servicesRightLargeText text-white mb-6"><?php echo $services_about_right_subtitle; ?></h3>

                <ul class="servicesRightContentText">
                <?php

global $post;

if ( is_page() && $post->post_parent ) {
    wp_list_pages(array(
      'child_of' => $parent,
      'title_li' => ''
  ));
} else {
    wp_list_pages(array(
      'child_of' => $post->ID,
      'title_li' => ''
  ));
}
?>
				</ul>
            </div>
        </div>
    </div>
</div>
