
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('hero_background_image', 'hero_subtitle');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>
<!-- declare variables -->
<?php 
$hero_title = (get_field('hero_title')) ? get_field('hero_title') : '' ;

$phone_1_href = (get_field('phone_1_href')) ? get_field('phone_1_href') : '' ;
$phone_2_href = (get_field('phone_2_href')) ? get_field('phone_2_href') : '' ;
$phone_1_display = (get_field('phone_1_display')) ? get_field('phone_1_display') : '' ;
$phone_2_display = (get_field('phone_2_display')) ? get_field('phone_2_display') : '' ;
$phone_1_location = (get_field('phone_1_location')) ? get_field('phone_1_location') : '' ;
$phone_2_location = (get_field('phone_2_location')) ? get_field('phone_2_location') : '' ;
$classes = (get_field('call_button_anchor_class')) ? get_field('call_button_anchor_class') : '' ;
$call_button_icon = (get_field('call_button_icon')) ? get_field('call_button_icon')['url'] : '' ;
?>

<div class="servicesHero hero pt-32 py-10 px-4 laptop:pt-40 laptop:pb-24" style="background: url( <?php echo $hero_background_image['url']; ?>) 100% 20% / cover;">
	<div class="altOverlay overlay"></div>
	<div class="servicesHeroInner max-w-1000 laptop:pb-16 laptop:py-0 text-center mx-auto laptop:pt-6">
		<div class="servicesHeroSubtitle max-w-450 laptop:px-3 mx-auto laptop:mb-3 text-20 laptop:text-20 text-green"><?php echo $hero_subtitle; ?></div>
		<div class="servicesHeroTitle text-black text-34 laptop:text-52 leading-tight laptop:leading-none text-white"><?php echo $hero_title ?></div>
		<div class="servicesHeroCall mt-3 laptop:mt-6 text-center text-white">

			<div class="phoneBtns">
				<div class="phoneBtnItem">
					<span class="phoneBtnItemLocation"><?php echo $phone_1_location?></span>
					<a href="tel:<?php echo $phone_1_href?>" class="phoneBtn btn"><img class="iconImage phoneBtnImage align-middle" src="<?php echo $call_button_icon?>" /> <span class=""><?php echo $phone_1_display ?></span></a>
				</div>
				<!-- Uncomment the below if a second number is used: -->
				<!-- <div class="phoneBtnItem">
					<span class="phoneBtnItemLocation"><?php echo $phone_2_location?></span>
					<a href="tel:<?php echo $phone_2_href?>" class="phoneBtn btn"><img class="iconImage phoneBtnImage align-middle" src="<?php echo $call_button_icon?>" /> <span class=""><?php echo $phone_2_display ?></span></a>
				</div> -->
			</div> <!-- end .phoneBtns -->

		</div>
	</div>
</div>
