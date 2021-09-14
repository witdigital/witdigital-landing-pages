<?php

$testimonials_background_image = (get_field('testimonials_background_image')) ? get_field('testimonials_background_image')['url'] : '' ;
$testimonials_section_title = (get_field('testimonials_section_title')) ? get_field('testimonials_section_title') : '' ;

?>

<div class="testimonialsInner py-12" style="background: url(<?php echo $testimonials_background_image ?>) center / cover;">
	<div class="overlay altOverlay"></div>
	<div class="testimonialContent max-w-1150 mx-auto px-4">
		<h2 class="testimonialsTitle text-white text-center"><?php echo $testimonials_section_title ?></h2>
		<div class="testimonialShortcode text-center my-10 text-white">
			<?php if( get_field('testimonials_shortcode') ) {
				echo do_shortcode (get_field('testimonials_shortcode'));
			} else {
				echo "TESTIMONIALS GO HERE.";
			}
			 ?>
		</div>
		<a class="btn py-2 px-3 my-0 mx-auto block text-white border-white border rounded-md text-center text-base uppercase font-bold leading-none" href="/testimonials">READ REVIEWS</a>
	</div>
</div>
