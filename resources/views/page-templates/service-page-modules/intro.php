<!-- declare variables -->
<?php
if( get_field('use_image_or_video_embed') ) {
    $use_image_or_video_embed = get_field('use_image_or_video_embed');
} else {
    $use_image_or_video_embed = '';
}

if( get_field('intro_embed') ) {
    $intro_embed = get_field('intro_embed');
} else {
    $intro_embed = '';
}

if( get_field('intro_image') ) {
    $intro_image = get_field('intro_image');
} else {
    $intro_image = '';
}

if( get_field('intro_title') ) {
    $intro_title = get_field('intro_title');
} else {
    $intro_title = '';
}

if( get_field('intro_text') ) {
    $intro_text = get_field('intro_text');
} else {
    $intro_text = '';
}

 ?>

<div class="servicesIntro my-5 laptop:mt-12 laptop:mb-16">
    <div class="servicesIntroInner mx-auto px-4 flex flex-wrap justify-between items-center <?php echo get_field('use_image_or_video_embed') == 'Embed' ? 'embed' : 'image'; ?>">
        <div class="servicesIntroImageContainer maxw400 laptop:pr-10">
            @if(get_field('use_image_or_video_embed') == 'Embed')
                <div class="introEmbed">
                    <?php echo get_field('intro_embed'); ?>
                </div>
            @else
                <div class="servicesIntroImage rounded-2xl" style="background: url(<?php echo get_field('intro_image')['url']; ?>) center / cover;"></div>
            @endif
        </div>
        <div class="servicesIntroContent maxw500 mt-3 laptop:mt-0">
            <h1 class="servicesIntroTitle text-32 laptop:text-42 mb-3"><?php the_field('intro_title'); ?></h1>
            <div class="servicesIntroText mb-6"><?php the_field('intro_text'); ?></div>
            <?php echo do_shortcode ('[request_btn class="phoneBtn"]'); ?>
        </div>
    </div>
</div>
