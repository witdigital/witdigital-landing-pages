
<!-- <?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('hero_background_image', 'hero_subtitle');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?> -->
<!-- declare variables -->
<?php if( get_field('hero_title') ) {
			$hero_title = get_field('hero_title');
		} else {
			$hero_title = '';
		}

		if( get_field('phone_number_tel') ) {
			$phone_number_tel = get_field('phone_number_tel');
		} else {
			$phone_number_tel = '';
		}

		if( get_field('phone_number_display') ) {
			$phone_number_display = get_field('phone_number_display');
		} else {
			$phone_number_display = '';
		}
?>

<div class="servicesHero hero pt-32 py-10 px-4 laptop:pt-40 laptop:pb-24" style="background: url( <?php echo $hero_background_image['url']; ?>) 100% 20% / cover;">
	<div class="altOverlay overlay"></div>
	<div class="servicesHeroInner max-w-1000 laptop:pb-16 laptop:py-0 text-center mx-auto laptop:pt-6">
		<div class="servicesHeroSubtitle max-w-450 laptop:px-3 mx-auto laptop:mb-3 text-20 laptop:text-20 text-green"><?php echo $hero_subtitle; ?></div>
		<div class="servicesHeroTitle text-black text-34 laptop:text-52 leading-tight laptop:leading-none text-white"><?php echo $hero_title ?></div>
		<div class="servicesHeroCall mt-3 laptop:mt-6 text-center text-white">
			<div class="heroPhone">
				<a href="tel:1<?php echo $phone_number_tel ?>"><?php echo $phone_number_display ?></a>
			</div>
		</div>
	</div>
</div>
