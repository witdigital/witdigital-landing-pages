<!-- declare variables -->
<?php
$wlp_intro_embed = (get_field('witlandingpages_intro_embed')) ? get_field('witlandingpages_intro_embed') : '' ;
$wlp_intro_image = (get_field('witlandingpages_intro_image')) ? get_field('witlandingpages_intro_image')['url'] : '' ;
$wlp_intro_b_rad = (get_field('witlandingpages_intro_border_rad')) ? get_field('witlandingpages_intro_border_rad') : '' ;
$wlp_intro_title = (get_field('witlandingpages_intro_title')) ? get_field('witlandingpages_intro_title') : '' ;
$wlp_intro_title_color = (get_field('witlandingpages_intro_title_color')) ? get_field('witlandingpages_intro_title_color') : '' ;
$wlp_intro_text = (get_field('witlandingpages_intro_text')) ? get_field('witlandingpages_intro_text') : '' ;
$wlp_intro_sc = (get_field('witlandingpages_intro_shortcode')) ? do_shortcode (get_field('witlandingpages_intro_shortcode')) : '' ;
$wlp_intro_css = (get_field('witlandingpages_intro_additional_css')) ? get_field('witlandingpages_intro_additional_css') : '' ;


$wlp_intro_radius = "border-radius: " . $wlp_intro_b_rad . "rem;";
$wlp_styles_intro_title = "color: " . $wlp_intro_title_color ."!important;";
?>

<style>
    <?php echo $wlp_intro_css ?>

    .servicesIntroImage {
        <?php echo $wlp_intro_radius ?>
    }
    .servicesIntroTitle {
        <?php echo $wlp_styles_intro_title ?>
    }
</style>

<div class="my-5 servicesIntro laptop:mt-12 laptop:mb-16">
    <div class="servicesIntroInner mx-auto px-4 flex flex-wrap justify-between items-center <?php echo get_field('witlandingpages_image_video') == 'Embed' ? 'embed' : 'image'; ?>">
        <div class="w-full servicesIntroImageContainer laptop:max-w-400 laptop:pr-10">
            <?php if(get_field('witlandingpages_image_video') == 'Embed') { ?>
                <div class="introEmbed">
                    <?php echo $wlp_intro_embed; ?>
                </div>
            <?php } else { ?>
                <div class="servicesIntroImage rounded-2xl" style="background: url(<?php echo $wlp_intro_image ?>) center / cover;"></div>
            <?php } ?>
        </div>
        <div class="w-full mt-3 text-center servicesIntroContent max-w-500 laptop:mt-0 laptop:text-left">
            <h2 class="mb-3 servicesIntroTitle text-32 laptop:text-42"><?php echo $wlp_intro_title ?></h2>
            <div class="mb-6 servicesIntroText"><?php echo $wlp_intro_text ?></div>
            <?php echo $wlp_intro_sc ?>
        </div>
    </div>
</div>
