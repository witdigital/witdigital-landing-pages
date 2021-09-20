
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
$wlp_hero_title_color = (get_field('witlandingpages_hero_title_color')) ? get_field('witlandingpages_hero_title_color') : '' ;
$wlp_hero_subtitle_color = (get_field('witlandingpages_hero_subtitle_color')) ? get_field('witlandingpages_hero_subtitle_color') : '' ;
$wlp_overlay_class = (get_field('witlandingpages_overlay')) == 'Color' ? 'colorOverlay' : 'gradientOverlay' ;
$wlp_overlay_color = (get_field('witlandingpages_overlay_color')) ? get_field('witlandingpages_overlay_color') : '' ;
$wlp_overlay_opacity = (get_field('witlandingpages_overlay_opacity')) ? get_field('witlandingpages_overlay_opacity') : '' ;
$wlp_overlay_gradient = (get_field('witlandingpages_overlay_gradient')) ? get_field('witlandingpages_overlay_gradient') : '' ;
$wlp_htc = "color: " . $wlp_hero_title_color .';';
$wlp_hstc = "color: " . $wlp_hero_subtitle_color .';';
$wlp_over_color = "background: " . $wlp_overlay_color . '!important;';
$wlp_opacity = "opacity: " . $wlp_overlay_opacity . "%;";
$wlp_gradient = "background: " . $wlp_overlay_gradient . '!important;';



// declare phone button variables:

$wlp_phone_1_href = (get_field('witlandingpages_phone_link')) ? get_field('witlandingpages_phone_link') : '' ;
$wlp_phone_2_href = (get_field('witlandingpages_phone_2_link')) ? get_field('witlandingpages_phone_2_link') : '' ;
$wlp_phone_1_display = (get_field('witlandingpages_phone_format')) ? get_field('witlandingpages_phone_format') : '' ;
$wlp_phone_2_display = (get_field('witlandingpages_phone_2_format')) ? get_field('witlandingpages_phone_2_format') : '' ;
$wlp_phone_1_location = (get_field('witlandingpages_phone_location')) ? get_field('witlandingpages_phone_location') : '' ;
$wlp_phone_2_location = (get_field('witlandingpages_phone_2_location')) ? get_field('witlandingpages_phone_2_location') : '' ;
$wlp_call_button_icon = (get_field('witlandingpages_phone_icon')) ? get_field('witlandingpages_phone_icon')['url'] : '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/phone-alt-solid.svg" /' ;
?>

	<!-- optional page styling: -->

		<style>
			.colorOverlay {
				<?php echo $wlp_over_color ?>
				<?php echo $wlp_opacity ?>
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

			<div class="flex items-center justify-between mx-auto my-0 phoneBtns flex-nowrap max-w-340">
				<div class="phoneBtnItem mb-2.5">
					<span class="phoneBtnItemLocation block mb-1.5 font-bold"><?php echo $wlp_phone_1_location?></span>
					<a href="tel:<?php echo $wlp_phone_1_href?>" class="px-3 py-2 text-base font-bold bg-white rounded-md phoneBtn btn"><img class="inline-block mr-1 w-3.5 align-middle iconImageFilter" src="<?php echo $wlp_call_button_icon?>" /> <span class=""><?php echo $wlp_phone_1_display ?></span></a>
				</div>

				<?php if( ($wlp_phone_2_href) && ($wlp_phone_2_display) ): ?>
				<div class="phoneBtnItem mb-2.5">
					<span class="phoneBtnItemLocation block mb-1.5 font-bold"><?php echo $wlp_phone_2_location?></span>
					<a href="tel:<?php echo $wlp_phone_2_href?>" class="px-3 py-2 text-base font-bold bg-white rounded-md phoneBtn btn"><img class="inline-block
					mr-1 w-3.5 align-middle iconImageFilter" src="<?php echo $wlp_call_button_icon?>" /> <span class=""><?php echo $wlp_phone_2_display ?></span></a>
				</div>
				<?php endif; ?>

			</div> <!-- end .phoneBtns -->

		</div>
	</div>
</div>
