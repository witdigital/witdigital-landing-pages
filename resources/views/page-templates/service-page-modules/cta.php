
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('witlandingpages_cta_image', 'witlandingpages_cta_title', 'witlandingpages_cta_content', 'witlandingpages_cta_background_color', 'witlandingpages_cta_background_gradient');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>
<?php 
$witlandingpages_cta_image = (get_field('witlandingpages_cta_image')) ? get_field('witlandingpages_cta_image')['url'] : '' ;
$services_cta_image_alt = (get_field('witlandingpages_cta_image')) ? get_field('witlandingpages_cta_image')['alt'] : '' ;
$witlandingpages_cta_title = (get_field('witlandingpages_cta_title')) ? get_field('witlandingpages_cta_title') : '' ;
$witlandingpages_cta_content = (get_field('witlandingpages_cta_content')) ? get_field('witlandingpages_cta_content') : '' ;
$wlp_cta_sc = (get_field('witlandingpages_cta_shortcode')) ? do_shortcode (get_field('witlandingpages_cta_shortcode')) : '' ;

$wlp_cta_background_class = (get_field('witlandingpages_cta_background')) == 'Color' ? 'ctaColorOverlay' : 'ctaGradientOverlay' ;
$wlp_cta_background_color = (get_field('witlandingpages_cta_background_color')) ? get_field('witlandingpages_cta_background_color') : '' ;
$wlp_cta_background_gradient = (get_field('witlandingpages_cta_background_gradient')) ? get_field('witlandingpages_cta_background_gradient') : '' ;
$wlp_cta_css = (get_field('witlandingpages_cta_additional_css')) ? get_field('witlandingpages_cta_additional_css') : '' ;

$wlp_cta_bkgnd_color = "background: " . $wlp_cta_background_color . '!important;';
$wlp_cta_gradient = "background: " . $wlp_cta_background_gradient . '!important;';
?>

<style>
    <?php echo $wlp_cta_css ?>
    
	.ctaColorOverlay {
		<?php echo $wlp_cta_bkgnd_color ?>
	}
	.ctaGradientOverlay {
		<?php echo $wlp_cta_gradient ?>
	}
</style>


<div class="mt-24 servicesCTA bg-grey laptop:mt-auto pb-10 laptop:pb-0 <?php echo $wlp_cta_background_class ?>">
    <div class="flex-wrap justify-between w-full px-4 py-8 mx-auto servicesCTAInner max-w-1300 laptop:flex ">
        <div class="flex-1 w-full servicesCTALeft max-w-600 laptop:pr-5">
            <img class="max-w-full" src="<?php echo $witlandingpages_cta_image; ?>" alt="<?php echo $services_cta_image_alt; ?>" />
        </div>
        <div class="w-full text-center servicesCTARight max-w-650 laptop:pl-1">
            <div class="servicesCTATitle"><?php echo $witlandingpages_cta_title; ?></div>
            <div class="my-5 servicesCTAText">
                <?php echo $witlandingpages_cta_content; ?>
            </div>
	
			<?php echo $wlp_cta_sc ?>
            
        </div>
    </div>
</div>
