
<!-- <?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('services_cta_image', 'services_cta_title', 'services_cta_text');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?> -->
<?php 

if ( get_field('services_cta_image') ) {
    $services_cta_image = get_field('services_cta_image')['url'];
} else {
    $services_cta_image = '';
}

if ( get_field('services_cta_image') ) {
    $services_cta_image_alt = get_field('services_cta_image')['alt'];
} else {
    $services_cta_image_alt = '';
}

if ( get_field('services_cta_title') ) {
    $services_cta_title = get_field('services_cta_title');
} else {
    $services_cta_title = '';
}

if ( get_field('services_cta_text') ) {
    $services_cta_text = get_field('services_cta_text');
} else {
    $services_cta_text = '';
}

?>
<div class="servicesCTA bg-grey">
    <div class="servicesCTAInner maxw1300 px-4 mx-auto py-8 laptop:flex flex-wrap justify-between ">
        <div class="servicesCTALeft flex-1 maxw600 laptop:pr-5">
            <img src="<?php echo $services_cta_image['url']; ?>" alt="<?php echo $services_cta_image['alt']; ?>" />
        </div>
        <div class="servicesCTARight text-center maxw650 laptop:pl-1">
            <h3 class="servicesCTATitle"><?php echo $services_cta_title; ?></h3>
            <div class="servicesCTAText my-5">
                <?php echo $services_cta_text; ?>
            </div>
            <?php echo do_shortcode ('[phone_button_alt class=""]'); ?>
        </div>
    </div>
</div>
