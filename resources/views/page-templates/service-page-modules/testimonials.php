<?php

$wlp_testimonials_img = (get_field('witlandingpages_testimonials_bkgrnd')) ? get_field('witlandingpages_testimonials_bkgrnd')['url'] : '' ;
$wlp_testimonials_title = (get_field('witlandingpages_testimonials_title')) ? get_field('witlandingpages_testimonials_title') : '' ;
$wlp_testimonials_title_color = (get_field('witlandingpages_testimonials_title_color')) ? get_field('witlandingpages_testimonials_title_color') : '' ;
$wlp_testBtn_href = (get_field('witlandingpages_testimonials_link')) ? get_field('witlandingpages_testimonials_link') : '' ;
$wlp_testBtn_text = (get_field('witlandingpages_testimonials_btn_text')) ? get_field('witlandingpages_testimonials_btn_text') : '' ;
$wlp_testimonials_sc = (get_field('witlandingpages_testimonials_shortcode')) ? do_shortcode (get_field('witlandingpages_testimonials_shortcode')) : 'words GO HERE.' ;

$wlp_test_overlay_class = (get_field('witlandingpages_overlay_testimonials')) == 'Color' ? 'testColorOverlay' : 'testGradientOverlay' ;
$wlp_test_overlay_color = (get_field('witlandingpages_overlay_color_testimonials')) ? get_field('witlandingpages_overlay_color_testimonials') : '' ;
$wlp_test_overlay_gradient = (get_field('witlandingpages_overlay_gradient_testimonials')) ? get_field('witlandingpages_overlay_gradient_testimonials') : '' ;

$wlp_styles_test_over_color = "background: " . $wlp_test_overlay_color . '!important;';
$wlp_styles_test_gradient = "background: " . $wlp_test_overlay_gradient . '!important;';
$wlp_styles_test_title_color = "color: " . $wlp_testimonials_title_color . "!important;";

// All Reviews Button Variables:
if( have_rows('witlandingpages_testimonials_button_styling') ) :
	while( have_rows('witlandingpages_testimonials_button_styling') ): the_row();

	$wlp_test_btn_background = (get_sub_field('witlandingpages_testimonial_button_background')) ? get_sub_field('witlandingpages_testimonial_button_background') : '' ;
	$wlp_test_btn_border_radius = (get_sub_field('witlandingpages_testimonial_button_border_radius')) ? get_sub_field('witlandingpages_testimonial_button_border_radius') : '1' ;
	$wlp_test_btn_border_color = (get_sub_field('witlandingpages_testimonial_button_border_color')) ? get_sub_field('witlandingpages_testimonial_button_border_color') : 'white' ;
	$wlp_test_btn_color = (get_sub_field('witlandingpages_testimonial_button_link_color')) ? get_sub_field('witlandingpages_testimonial_button_link_color') : '' ;

	endwhile;
endif; 

// All Reviews Button Styling Variables:
$wlp_styles_test_btn_bkgrnd = "background-color: " . $wlp_test_btn_background . ";";
$wlp_styles_test_btn_rad = "border-radius: " . $wlp_test_btn_border_radius . "rem;";
$wlp_styles_test_btn_border_color = "border-color: " . $wlp_test_btn_border_color . "!important;";
$wlp_styles_test_btn_color = "color: " . $wlp_test_btn_color . "!important;";

// Additional CSS:
$wlp_test_css = (get_field('witlandingpages_test_additional_css')) ? get_field('witlandingpages_test_additional_css') : '' ;

?>

<style>
	<?php echo $wlp_test_css ?>
	
	.testColorOverlay {
		<?php echo $wlp_styles_test_over_color ?>
	}
	.testGradientOverlay {
		<?php echo $wlp_styles_test_gradient ?>
	}
	.testimonialsTitle {
		<?php echo $wlp_styles_test_title_color ?>
	}
	.testimonialContent a{
		<?php echo $wlp_styles_test_btn_bkgrnd ?>
		<?php echo $wlp_styles_test_btn_rad ?>
		<?php echo $wlp_styles_test_btn_border_color ?>
		<?php echo $wlp_styles_test_btn_color ?>
	}
	.testimonialContent a:hover {
		cursor: pointer;
	}
</style>

<div class="relative py-12 testimonialsInner laptop:mt-64" style="background: url(<?php echo $wlp_testimonials_img ?>) center / cover;">
	<div class="overlay altOverlay <?php echo $wlp_test_overlay_class ?>"></div>
	<div class="px-4 mx-auto testimonialContent max-w-1150">
		<h2 class="text-center text-white testimonialsTitle"><?php echo $wlp_testimonials_title ?></h2>
		<div class="my-10 text-center text-white testimonialShortcode">
			 <?php echo $wlp_testimonials_sc ?>
		</div>
		<a class="block px-3 py-2 mx-auto my-0 text-base font-bold leading-none text-center text-white uppercase border border-white rounded-md btn" href="<?php echo $wlp_testBtn_href ?>"><?php echo $wlp_testBtn_text ?></a>
	</div>
</div>
