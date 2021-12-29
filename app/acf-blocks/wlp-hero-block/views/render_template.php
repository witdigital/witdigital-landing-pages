<?php

/*  ==========================================================================
    * Filename: render_template.php
    * Description: Front end for the WLP Hero Block block
    * Author: edawson1980
    *

    [Table of contents]

    1. Define block specific Vars
    2. Include block specific styling
    3. Create the hooks for this view
    4. Get ACF Values for Content
    5. Render the front end
    6. Include block specific script

    ========================================================================== */

/* ==========================================================================
	Define block specific Vars
    Build ID and Class names.
   ========================================================================== */

if ( ! empty( $block ) ) {
	//  This instances ID
	$blockID = $block['id'];
	//  The block name
	$blockName = $block['name'];
	// replace forward slash in block name for better compatibility
	$blockName = str_replace( '/', '_', $blockName );
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'wlp-blocks ' . $blockName . ' ' . $blockID;
if ( ! empty( $block['className'] ) ) {
	$className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$className .= ' align' . $block['align'];
}

/*  ==========================================================================
	Include block specific styling
	========================================================================== */

// include_once 'block_styling.php';

/*  ==========================================================================
    Get ACF Values for Content
    ========================================================================== */

// Get the post ID for getting fields if pulling from a post
//$id = get_the_id();

if ( get_field( 'wlp_hero_block_header_content' ) ) :
	$wlp_hero_block_header_content = get_field( 'wlp_hero_block_header_content' );
else :
	$wlp_hero_block_header_content = 'WLP Hero Block Header Section';
endif;

$wlp_hero_title = (get_field('witlandingpages_hero_title')) ? get_field('witlandingpages_hero_title') : '' ;
$wlp_hero_image = (get_field('witlandingpages_hero_image')) ? get_field('witlandingpages_hero_image')['url'] : '' ;


if ( get_field( 'wlp_hero_block_content' ) ) :
	$wlp_hero_block_content = get_field( 'wlp_hero_block_content' );
else :
	$wlp_hero_block_content = 'WLP Hero Block Content Section';
endif;

if ( get_field( 'wlp_hero_block_footer_content' ) ) :
	$wlp_hero_block_footer_content = get_field( 'wlp_hero_block_footer_content' );
else :
	$wlp_hero_block_footer_content = 'WLP Hero Block Footer Section';
endif;

/*  ==========================================================================
    Define InnerBLocks Template
    ========================================================================== */
// $wlp_hero_block_template = array(
// 	array('core/heading', array(
// 		'level' => 2,
// 		'placeholder' => 'Title Goes Here',
// 	)),
// 	array( 'core/paragraph', array(
// 		'placeholder' => 'Paragraph Copy',
// 	) )
// );



/*  ==========================================================================
    Render the front end
    ========================================================================== */

?>

        <style>
			<?php echo $wlp_hero_css ?>
			
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

    <div id="<?php echo $blockID ?>" class="<?php echo esc_attr( $className ); ?>">



        <div class="wlpHeroBlock_wrapper">

            <div class="wlpHeroBlock_inner">

                <div class="px-4 py-10 servicesHero hero laptop:pt-40 laptop:pb-24" style="background: url( <?php echo $witlandingpages_hero_image['url']; ?>) 100% 20% / cover;">
	            <div class="altOverlay overlay <?php echo $wlp_overlay_class ?>"></div>
                    <div class="mx-auto text-center servicesHeroInner max-w-1000 laptop:pb-16 laptop:pt-6">
                        <span class="mx-auto servicesHeroSubtitle max-w-450 laptop:px-3 laptop:mb-3 text-20 laptop:text-20 text-green"><?php echo $witlandingpages_hero_subtitle; ?></span>
                        <h1 class="leading-tight text-white servicesHeroTitle text-34 laptop:text-52 laptop:leading-none"><?php echo $wlp_hero_title ?></h1>

                        <div class="mt-3 text-center text-white servicesHeroCall laptop:mt-6">
                            <?php echo $wlp_hero_sc ?>
                        </div>
            
                    </div>
                </div> <!-- End of .servicesHero -->

            </div> <!-- End of .wlpHeroBlock_inner -->

        </div> <!-- End of .wlpHeroBlock_wrapper -->

    </div> <!-- End of <?php echo esc_attr( $className ); ?> -->

<?php

/*  ==========================================================================
    Include block specific script
    ========================================================================== */

include_once 'block_scripts.php';

?>
