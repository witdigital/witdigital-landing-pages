
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('witlandingpages_cta_image', 'witlandingpages_cta_title', 'witlandingpages_cta_content');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>
<?php 
$services_cta_image = (get_field('witlandingpages_cta_image')) ? get_field('witlandingpages_cta_image')['url'] : '' ;
$services_cta_image_alt = (get_field('witlandingpages_cta_image')) ? get_field('witlandingpages_cta_image')['alt'] : '' ;
$services_cta_title = (get_field('witlandingpages_cta_title')) ? get_field('witlandingpages_cta_title') : '' ;
$services_cta_text = (get_field('witlandingpages_cta_content')) ? get_field('witlandingpages_cta_content') : '' ;
?>
<div class="mt-24 servicesCTA bg-grey laptop:mt-auto">
    <div class="flex-wrap justify-between w-full px-4 py-8 mx-auto servicesCTAInner max-w-1300 laptop:flex ">
        <div class="flex-1 w-full servicesCTALeft max-w-600 laptop:pr-5">
            <img class="max-w-full" src="<?php echo $services_cta_image; ?>" alt="<?php echo $services_cta_image_alt; ?>" />
        </div>
        <div class="w-full text-center servicesCTARight max-w-650 laptop:pl-1">
            <h3 class="servicesCTATitle"><?php echo $services_cta_title; ?></h3>
            <div class="my-5 servicesCTAText">
                <?php echo $services_cta_text; ?>
            </div>
 
			<div class="flex items-center justify-between mx-auto my-0 phoneBtns flex-nowrap max-w-340">
				<div class="phoneBtnItem mb-2.5">
					<span class="phoneBtnItemLocation block mb-1.5 font-bold"><?php echo $phone_1_location?></span>
					<a href="tel:<?php echo $phone_1_href?>" class="px-3 py-2 text-base font-bold bg-white rounded-md phoneBtn btn"><img class="align-middle iconImage phoneBtnImage" src="<?php echo $call_button_icon?>" /> <span class=""><?php echo $phone_1_display ?></span></a>
				</div>

				<?php if( ($phone_2_href) && ($phone_2_display) ): ?>
				<div class="phoneBtnItem mb-2.5">
					<span class="phoneBtnItemLocation block mb-1.5 font-bold"><?php echo $phone_2_location?></span>
					<a href="tel:<?php echo $phone_2_href?>" class="px-3 py-2 text-base font-bold bg-white rounded-md phoneBtn btn"><img class="align-middle iconImage phoneBtnImage" src="<?php echo $call_button_icon?>" /> <span class=""><?php echo $phone_2_display ?></span></a>
				</div>
				<?php endif; ?>

			</div> <!-- end .phoneBtns -->
            
        </div>
    </div>
</div>
