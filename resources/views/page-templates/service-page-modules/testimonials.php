<?php

$testimonials_background_image = (get_field('testimonials_background_image')) ? get_field('testimonials_background_image')['url'] : '' ;
$testimonials_section_title = (get_field('testimonials_section_title')) ? get_field('testimonials_section_title') : '' ;
$testimonials_shortcode = (get_field('testimonials_shortcode')) ? get_field('testimonials_shortcode') : '' ;

?>

<div class="testimonialsInner py-12" style="background: url(<?php echo $testimonials_background_image ?>) center / cover;">
	<div class="overlay altOverlay"></div>
	<div class="testimonialContent max-w-1150 mx-auto px-4">
		<h2 class="testimonialsTitle text-white text-center"><?php echo $testimonials_section_title ?></h2>
		<div class="testimonialShortcode text-center my-10 text-white">
			<?php echo do_shortcode ($testimonials_shortcode); ?>
			<!-- <?php echo do_shortcode (get_field('testimonials_shortcode', 'option')); ?> -->
		</div>
		<a class="ghostBtn btn centerBtn" href="/testimonials">READ REVIEWS</a>
	</div>
</div>
