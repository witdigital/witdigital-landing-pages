<div class="testimonialsInner py-12" style="background: url(<?php echo get_field('testimonials_background_image', 'option')['url']; ?>) center / cover;">
	<div class="overlay altOverlay"></div>
	<div class="testimonialContent maxw1150 mx-auto px-4">
		<h2 class="testimonialsTitle text-white text-center"><?php the_field('testimonial_section_title', 'option'); ?></h2>
		<div class="testimonialShortcode text-center my-10 text-white">
			<?php echo do_shortcode (get_field('testimonials_shortcode', 'option')); ?>
		</div>
		<a class="ghostBtn btn centerBtn" href="/testimonials">READ REVIEWS</a>
	</div>
</div>
