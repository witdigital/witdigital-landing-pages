
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('witlandingpages_hero_image', 'witlandingpages_hero_subtitle');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>
<!-- declare variables -->
<?php 
$wlp_hero_title = (get_field('witlandingpages_hero_title')) ? get_field('witlandingpages_hero_title') : '' ;
$witlandingpages_hero_subtitle = (get_field('witlandingpages_hero_subtitle')) ? get_field('witlandingpages_hero_subtitle') : '' ;
$witlandingpages_hero_image = (get_field('witlandingpages_hero_image')) ? get_field('witlandingpages_hero_image')['url'] : '' ;
$wlp_hero_sc = (get_field('witlandingpages_hero_shortcode')) ? do_shortcode (get_field('witlandingpages_hero_shortcode')) : '' ;
$wlp_hero_title_color = (get_field('witlandingpages_hero_title_color')) ? get_field('witlandingpages_hero_title_color') : '' ;
$wlp_hero_subtitle_color = (get_field('witlandingpages_hero_subtitle_color')) ? get_field('witlandingpages_hero_subtitle_color') : '' ;
$wlp_overlay_class = (get_field('witlandingpages_overlay')) == 'Color' ? 'colorOverlay' : 'gradientOverlay' ;
$wlp_overlay_color = (get_field('witlandingpages_overlay_color')) ? get_field('witlandingpages_overlay_color') : '' ;
$wlp_overlay_gradient = (get_field('witlandingpages_overlay_gradient')) ? get_field('witlandingpages_overlay_gradient') : '' ;
$wlp_htc = "color: " . $wlp_hero_title_color .'!important;';
$wlp_hstc = "color: " . $wlp_hero_subtitle_color .';';
$wlp_over_color = "background: " . $wlp_overlay_color . '!important;';
$wlp_gradient = "background: " . $wlp_overlay_gradient . '!important;';

?>

	<!-- optional page styling: -->

		<style>
			.colorOverlay {
				<?php echo $wlp_over_color ?>
			}
			.gradientOverlay {
				<?php echo $wlp_gradient ?>
			}
			.servicesHeroSubtitle {
				<?php echo $wlp_hstc ?>
			}
			.servicesHeroTitle {
				<?php echo $wlp_htc ?>
			}
		</style>

	<!-- optional page styling: -->

<div class="px-4 py-10 pt-32 servicesHero hero laptop:pt-40 laptop:pb-24" style="background: url( <?php echo $witlandingpages_hero_image; ?>) 100% 20% / cover;">
	<div class="altOverlay overlay <?php echo $wlp_overlay_class ?>"></div>
	<div class="mx-auto text-center servicesHeroInner max-w-1000 laptop:pb-16 laptop:py-0 laptop:pt-6">
		<span class="mx-auto servicesHeroSubtitle max-w-450 laptop:px-3 laptop:mb-3 text-20 laptop:text-20 text-green"><?php echo $witlandingpages_hero_subtitle; ?></span>
		<h1 class="leading-tight text-white servicesHeroTitle text-34 laptop:text-52 laptop:leading-none"><?php echo $wlp_hero_title ?></h1>

		<div class="mt-3 text-center text-white servicesHeroCall laptop:mt-6">
			<?php echo $wlp_hero_sc ?>
		</div>
		
	</div>
</div>
