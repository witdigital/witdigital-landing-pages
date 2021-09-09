
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('services_cta_image', 'services_cta_title', 'services_cta_text');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>
<?php 
$services_cta_image = (get_field('services_cta_image')) ? get_field('services_cta_image')['url'] : '' ;
$services_cta_image_alt = (get_field('services_cta_image')) ? get_field('services_cta_image')['alt'] : '' ;
$services_cta_title = (get_field('services_cta_title')) ? get_field('services_cta_title') : '' ;
$services_cta_text = (get_field('services_cta_text')) ? get_field('services_cta_text') : '' ;
?>
<div class="servicesCTA bg-grey">
    <div class="servicesCTAInner max-w-1300 w-full px-4 mx-auto py-8 laptop:flex flex-wrap justify-between ">
        <div class="servicesCTALeft flex-1 max-w-600 w-full laptop:pr-5">
            <img src="<?php echo $services_cta_image; ?>" alt="<?php echo $services_cta_image_alt; ?>" />
        </div>
        <div class="servicesCTARight text-center max-w-650 w-full laptop:pl-1">
            <h3 class="servicesCTATitle"><?php echo $services_cta_title; ?></h3>
            <div class="servicesCTAText my-5">
                <?php echo $services_cta_text; ?>
            </div>
 
			<div class="phoneBtns">
				<div class="phoneBtnItem">
					<span class="phoneBtnItemLocation"><?php echo $phone_1_location?></span>
					<a href="tel:<?php echo $phone_1_href?>" class="phoneBtn btn bg-white rounded-md py-2 px-3 text-base font-bold"><img class="iconImage phoneBtnImage align-middle" src="<?php echo $call_button_icon?>" /> <span class=""><?php echo $phone_1_display ?></span></a>
				</div>
				<!-- Uncomment the below if a second number is used: -->
				<!-- <div class="phoneBtnItem">
					<span class="phoneBtnItemLocation"><?php echo $phone_2_location?></span>
					<a href="tel:<?php echo $phone_2_href?>" class="phoneBtn btn bg-white rounded-md py-2 px-3 text-base font-bold"><img class="iconImage phoneBtnImage align-middle" src="<?php echo $call_button_icon?>" /> <span class=""><?php echo $phone_2_display ?></span></a>
				</div> -->
			</div> <!-- end .phoneBtns -->
            
        </div>
    </div>
</div>
