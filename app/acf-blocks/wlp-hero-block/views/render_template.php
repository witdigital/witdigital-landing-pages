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

include_once 'block_styling.php';

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

    <div id="<?php echo $blockID ?>" class="<?php echo esc_attr( $className ); ?>">



        <div class="wlpHeroBlock_wrapper">

            <div class="flex flex-col items-center justify-between wlpHeroBlock_inner lg:flex-row">
                <!-- <section class="col1 lg:w-1/2">

                    <div class="innerBlocks">
                        <?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $wlp_hero_block_template ) ) . '" />';?>
                    </div>

                </section> -->
                <aside class="flex flex-col self-start max-w-full col2 lg:px-0 lg:w-1/2">

                <div class="hero" style="background: url( <?php echo $wlp_hero_image; ?>) 100% 20% / cover;">
                    <?php echo $wlp_hero_title ?>
                </div>

                    <?php if ( $wlp_hero_block_header_content ): ?>
                    <div class="wlpHeroBlock_heading">

                        <h3><?php echo $wlp_hero_block_header_content ?></h3>
                    </div>
	                <?php endif; ?>



	            <?php if ( $wlp_hero_block_content ): ?>
                    <div class="wlpHeroBlock_content">




                        <?php echo $wlp_hero_block_content ?>
                    </div>
	            <?php endif; ?>

               


	            <?php if ( $wlp_hero_block_footer_content ): ?>
                    <div class="wlpHeroBlock_footer">
			            <?php echo $wlp_hero_block_footer_content ?>
                    </div>
	            <?php endif; ?>
                </aside>

            </div> <!-- End of .wlpHeroBlock_inner -->

        </div> <!-- End of .wlpHeroBlock_wrapper -->

    </div> <!-- End of <?php echo esc_attr( $className ); ?> -->

<?php

/*  ==========================================================================
    Include block specific script
    ========================================================================== */

include_once 'block_scripts.php';

?>
