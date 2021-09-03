
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('services_cta_image', 'services_cta_title', 'services_cta_text');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>
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
    <div class="servicesCTAInner max-w-1300 px-4 mx-auto py-8 laptop:flex flex-wrap justify-between ">
        <div class="servicesCTALeft flex-1 max-w-600 laptop:pr-5">
            <img src="<?php echo $services_cta_image; ?>" alt="<?php echo $services_cta_image_alt; ?>" />
        </div>
        <div class="servicesCTARight text-center max-w-650 laptop:pl-1">
            <h3 class="servicesCTATitle"><?php echo $services_cta_title; ?></h3>
            <div class="servicesCTAText my-5">
                <?php echo $services_cta_text; ?>
            </div>
            <div class="ctaPhone">
				<a href="tel:1<?php echo $phone_number_tel ?>"><?php echo $phone_number_display ?></a>
			</div>
        </div>
    </div>
</div>
