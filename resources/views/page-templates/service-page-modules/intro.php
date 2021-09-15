<!-- declare variables -->
<?php
$intro_embed = (get_field('witlandingpages_intro_embed')) ? get_field('witlandingpages_intro_embed') : '' ;
$intro_image = (get_field('witlandingpages_intro_image')) ? get_field('witlandingpages_intro_image')['url'] : '' ;
$intro_title = (get_field('witlandingpages_intro_title')) ? get_field('witlandingpages_intro_title') : '' ;
$intro_text = (get_field('witlandingpages_intro_text')) ? get_field('witlandingpages_intro_text') : '' ;
$request_url = (get_field('witlandingpages_request_url')) ? get_field('witlandingpages_request_url') : '' ;
$request_display = (get_field('witlandingpages_request_display')) ? get_field('witlandingpages_request_display') : '' ;
?>

<div class="servicesIntro my-5 laptop:mt-12 laptop:mb-16">
    <div class="servicesIntroInner mx-auto px-4 flex flex-wrap justify-between items-center <?php echo get_field('witlandingpages_image_video') == 'Embed' ? 'embed' : 'image'; ?>">
        <div class="servicesIntroImageContainer laptop:max-w-400 w-full laptop:pr-10">
            <?php if(get_field('witlandingpages_image_video') == 'Embed') { ?>
                <div class="introEmbed">
                    <?php echo $intro_embed; ?>
                </div>
            <?php } else { ?>
                <div class="servicesIntroImage rounded-2xl" style="background: url(<?php echo $intro_image ?>) center / cover;"></div>
            <?php } ?>
        </div>
        <div class="servicesIntroContent max-w-500 w-full mt-3 laptop:mt-0 text-center laptop:text-left">
            <h1 class="servicesIntroTitle text-32 laptop:text-42 mb-3"><?php echo $intro_title ?></h1>
            <div class="servicesIntroText mb-6"><?php echo $intro_text ?></div>
            <div class="requestButton">
                <a class="phoneBtn btn bg-white rounded-md py-2 px-3 text-base font-bold uppercase" href="<?php echo $request_url ?>"><?php echo $request_display ?></a>
            </div>
        </div>
    </div>
</div>
