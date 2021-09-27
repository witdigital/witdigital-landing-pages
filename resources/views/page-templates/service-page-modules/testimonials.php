<?php

$wlp_testimonials_img = (get_field('witlandingpages_testimonials_bkgrnd')) ? get_field('witlandingpages_testimonials_bkgrnd')['url'] : '' ;
$wlp_testimonials_title = (get_field('witlandingpages_testimonials_title')) ? get_field('witlandingpages_testimonials_title') : '' ;
$wlp_testBtn_href = (get_field('witlandingpages_testimonials_link')) ? get_field('witlandingpages_testimonials_link') : '' ;
$wlp_testBtn_text = (get_field('witlandingpages_testimonials_btn_text')) ? get_field('witlandingpages_testimonials_btn_text') : '' ;
$wlp_testimonials_sc = (get_field('witlandingpages_testimonials_shortcode')) ? do_shortcode (get_field('witlandingpages_testimonials_shortcode')) : 'words GO HERE.' ;

$wlp_test_overlay_class = (get_field('witlandingpages_overlay_testimonials')) == 'Color' ? 'testColorOverlay' : 'testGradientOverlay' ;
$wlp_test_overlay_color = (get_field('witlandingpages_overlay_color_testimonials')) ? get_field('witlandingpages_overlay_color_testimonials') : '' ;
$wlp_test_overlay_gradient = (get_field('witlandingpages_overlay_gradient_testimonials')) ? get_field('witlandingpages_overlay_gradient_testimonials') : '' ;

$wlp_styles_test_over_color = "background: " . $wlp_test_overlay_color . '!important;';
$wlp_styles_test_gradient = "background: " . $wlp_test_overlay_gradient . '!important;';

?>

<style>
	.testColorOverlay {
		<?php echo $wlp_styles_test_over_color ?>
	}
	.testGradientOverlay {
		<?php echo $wlp_styles_test_gradient ?>
	}
</style>

<div class="py-12 testimonialsInner laptop:mt-64" style="background: url(<?php echo $wlp_testimonials_img ?>) center / cover;">
	<div class="overlay altOverlay <?php echo $wlp_test_overlay_class ?>"></div>
	<div class="px-4 mx-auto testimonialContent max-w-1150">
		<h2 class="text-center text-white testimonialsTitle"><?php echo $wlp_testimonials_title ?></h2>
		<div class="my-10 text-center text-white testimonialShortcode">
			 <?php echo $wlp_testimonials_sc ?>
		</div>
		<a class="block px-3 py-2 mx-auto my-0 text-base font-bold leading-none text-center text-white uppercase border border-white rounded-md btn focus:bg-white focus:text-blue" href="<?php echo $wlp_testBtn_href ?>"><?php echo $wlp_testBtn_text ?></a>
	</div>
</div>
