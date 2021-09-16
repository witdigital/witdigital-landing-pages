<?php

$wpl_testimonials_img = (get_field('witlandingpages_testimonials_bkgrnd')) ? get_field('witlandingpages_testimonials_bkgrnd')['url'] : '' ;
$wpl_testimonials_title = (get_field('witlandingpages_testimonials_title')) ? get_field('witlandingpages_testimonials_title') : '' ;
$wpl_testBtn_href = (get_field('witlandingpages_testimonials_link')) ? get_field('witlandingpages_testimonials_link') : '' ;
$wpl_testBtn_text = (get_field('witlandingpages_testimonials_btn_text')) ? get_field('witlandingpages_testimonials_btn_text') : '' ;

?>

<div class="py-12 testimonialsInner laptop:mt-64" style="background: url(<?php echo $wpl_testimonials_img ?>) center / cover;">
	<div class="overlay altOverlay"></div>
	<div class="px-4 mx-auto testimonialContent max-w-1150">
		<h2 class="text-center text-white testimonialsTitle"><?php echo $wpl_testimonials_title ?></h2>
		<div class="my-10 text-center text-white testimonialShortcode">
			<?php if( get_field('witlandingpages_testimonials_shortcode') ) {
				echo do_shortcode (get_field('witlandingpages_testimonials_shortcode'));
			} else {
				echo "TESTIMONIALS GO HERE.";
			}
			 ?>
		</div>
		<a class="block px-3 py-2 mx-auto my-0 text-base font-bold leading-none text-center text-white uppercase border border-white rounded-md btn focus:bg-white focus:text-blue" href="<?php echo $wpl_testBtn_href ?>"><?php echo $wpl_testBtn_text ?></a>
	</div>
</div>
