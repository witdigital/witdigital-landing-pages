<?php

/**
 * Filename: block_styling.php
 * Description: Outputs inline CSS from SCSS inside PHP for an instance of this block
 * Author: @ryanemitchell
 *
 */


/*  ==========================================================================
	Import ScssPHP
	Ref: https://scssphp.github.io/scssphp/
	========================================================================== */

use ScssPhp\ScssPhp\Compiler;
global $witcom_breakpoint_md;
/*  ==========================================================================
	Get Wit Commander fields and set vars
	========================================================================== */



/*  ==========================================================================
	Get ACF Values for SCSS
	========================================================================== */

/* === Layout ==== */

if ( get_field( 'wlp_hero_block_wrapper_padding' ) ) :
	$wlp_hero_block_wrapper_padding = get_field( 'wlp_hero_block_wrapper_padding' ) . "px";
else :
	$wlp_hero_block_wrapper_padding = '0';
endif;


/* ===  ACF Fields to Variables === */

if ( get_field( 'wlp_hero_block_desktop_background_color' ) ) :
	$wlp_hero_block_desktop_background_color = get_field( 'wlp_hero_block_desktop_background_color' );
else :
	$wlp_hero_block_desktop_background_color = '#CCFF00';
endif;



if ( get_field( 'wlp_hero_block_mobile_background_color' ) ) :
	$wlp_hero_block_mobile_background_color = get_field( 'wlp_hero_block_mobile_background_color' );
else :
	$wlp_hero_block_mobile_background_color = '#FF00CC';
endif;


/* === Additional SCSS === */

if ( get_field( 'wlp_hero_block_additional_scss' ) ) :
	$wlp_hero_block_additional_scss = get_field( 'wlp_hero_block_additional_scss' );
else :
	$wlp_hero_block_additional_scss = '';
endif;


/*  ==========================================================================
	Create Block Dynamic SCSS
	========================================================================== */

$wlp_hero_block_scss = /** @lang SCSS */
	"

            #$blockID {
         
               .wlpHeroBlock {
               
	               &_wrapper {
	                 background-color: $wlp_hero_block_mobile_background_color;
	                 padding: $wlp_hero_block_wrapper_padding;
	               
		                @media (min-width: $witcom_breakpoint_md) {
		                  background-color: $wlp_hero_block_desktop_background_color;
		                } //end medium breakpoint
	               
	               }

					&_inner {
	                 display: flex;
	                 flex-direction: column;
					 align-items: center;
	                 justify-items: center; 
	               
	               }
               
               }
               
				/* ===========================  Styling for in the editor ONLY  ========================== */
               
				@at-root {
				  .wp-admin {
				    #$blockID {
				      border: 1px solid red;
				    }
				  }
				}

               /* ===========================  End editor ONLY Styling ========================== */
               

               $wlp_hero_block_additional_scss

            } /* End of .$blockID */

       ";  // end $witcom_split_content_scss


/*  ==========================================================================
	Compile SCSS
	========================================================================== */

// $scss = new Compiler();

// Option to Crunch SCSS from Wit Commander Settings
// if ( get_field( 'crunch_witcom_scss', 'option' ) ):
// 	$scss->setFormatter( 'ScssPhp\ScssPhp\Formatter\Crunched' );
// else:
	// $scss->setFormatter( 'ScssPhp\ScssPhp\Formatter\Expanded' );

// Override Wit Commander
// 	$scss->setFormatter( 'ScssPhp\ScssPhp\Formatter\Crunched' );
// endif;


// $compiledCssCode = $scss->compile( $wlp_hero_block_scss );

/*  ==========================================================================
	Write CSS to the browser
	========================================================================== */

echo( "<style id='$blockID-style'>\r\n" );
echo $wlp_hero_block_scss;
// echo $compiledCssCode;
echo( '</style>' );
