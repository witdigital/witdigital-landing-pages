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

/*  ==========================================================================
	Get Wit Commander fields and set vars
	========================================================================== */



/*  ==========================================================================
	Get ACF Values for SCSS
	========================================================================== */

/* === Layout ==== */




/* ===  Colors === */

if ( get_field( 'acf_starter_block_desktop_background_color' ) ) :
	$acf_starter_block_desktop_background_color = get_field( 'acf_starter_block_desktop_background_color' );
else :
	$acf_starter_block_desktop_background_color = '#ffffff';
endif;



if ( get_field( 'acf_starter_block_mobile_background_color' ) ) :
	$acf_starter_block_mobile_background_color = get_field( 'acf_starter_block_mobile_background_color' );
else :
	$acf_starter_block_mobile_background_color = '#ffffff';
endif;


/* === Additional SCSS === */

if ( get_field( 'acf_starter_block_additional_scss' ) ) :
	$acf_starter_block_additional_scss = get_field( 'acf_starter_block_additional_scss' );
else :
	$acf_starter_block_additional_scss = '';
endif;


/*  ==========================================================================
	Create Block Dynamic SCSS
	========================================================================== */

$wit_acf_starter_block_scss = /** @lang SCSS */
	"

            #$blockID {
         
               .starterBlock {
               
	               &_wrapper {
	                 background-color: $acf_starter_block_mobile_background_color;
	               
		                @media (min-width: 1024px) {
		                  background-color: $acf_starter_block_desktop_background_color;
		                } //end medium breakpoint
	               
	               }

					&_inner {
	                 display: grid;
	                 grid-template-columns: auto; 
	                 justify-items: center; 
	               
	               }
               
               }

               $acf_starter_block_additional_scss

            } /* End of .$blockID */

       ";  // end $witcom_split_content_scss


/*  ==========================================================================
	Compile SCSS
	========================================================================== */

$scss = new Compiler();

// Option to Crunch SCSS from Wit Commander Settings
if ( get_field( 'crunch_witcom_scss', 'option' ) ):
	$scss->setFormatter( 'ScssPhp\ScssPhp\Formatter\Crunched' );
else:
//	$scss->setFormatter( 'ScssPhp\ScssPhp\Formatter\Expanded' );

// Override Wit Commander
	$scss->setFormatter( 'ScssPhp\ScssPhp\Formatter\Crunched' );
endif;


$compiledCssCode = $scss->compile( $wit_acf_starter_block_scss );

/*  ==========================================================================
	Write CSS to the browser
	========================================================================== */

echo( "<style id='$blockID-style'>\r\n" );
echo $compiledCssCode;
echo( '</style>' );
