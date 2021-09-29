<?php 

// Shortcodes for phone button and Request Service button


/* ==========================================================================
   ONE PHONE NUMBER
   ========================================================================== */


function witlandingpages_one_phone( $atts ) {
    ob_start(); //start buffer to output after the_content()

    extract(shortcode_atts(array(
        'class' => '',
      ), $atts));

    // declare phone button variables:

    $wlp_phone_1_href = (get_field('witlandingpages_phone_link')) ? get_field('witlandingpages_phone_link') : '' ;
    $wlp_phone_1_display = (get_field('witlandingpages_phone_format')) ? get_field('witlandingpages_phone_format') : '' ;
    $wlp_call_button_icon = '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/phone-alt-solid.svg' ;
    $wlp_style_call_btn = 'background: url(' . $wlp_call_button_icon . ') center / cover;';

       // Style Variables:
       if( have_rows('witlandingpages_phone_styling', 'option') ) :
        while( have_rows('witlandingpages_phone_styling', 'option') ): the_row();
    
        $wlp_phone_background = (get_sub_field('witlandingpages_phone_background_color')) ? get_sub_field('witlandingpages_phone_background_color') : 'white' ;
        $wlp_phone_background_hvr = (get_sub_field('witlandingpages_phone_background_color_hover')) ? get_sub_field('witlandingpages_phone_background_color_hover') : '' ;
        $wlp_phone_border_radius = (get_sub_field('witlandingpages_phone_border_radius')) ? get_sub_field('witlandingpages_phone_border_radius') : '1' ;
        $wlp_phone_body_color = (get_sub_field('witlandingpages_phone_body_color')) ? get_sub_field('witlandingpages_phone_body_color') : 'black' ;
        $wlp_phone_body_color_hover = (get_sub_field('witlandingpages_phone_body_color_hover')) ? get_sub_field('witlandingpages_phone_body_color_hover') : '' ;
        $wlp_phone_default_filter = (get_sub_field('witlandingpages_phone_default_icon_filter')) ? get_sub_field('witlandingpages_phone_default_icon_filter') : '' ;
        $wlp_phone_default_filter_hvr = (get_sub_field('witlandingpages_phone_default_filter_hover')) ? get_sub_field('witlandingpages_phone_default_filter_hover') : '' ;
        $wlp_phone_if_custom = (get_sub_field('witlandingpages_phone_custom_icon')) == '1' ? 'customPhone' : 'defaultPhone' ;
        $wlp_phone_png_svg = (get_sub_field('witlandingpages_phone_png_svg')) == 'PNG' ? 'pngPhone' : 'svgPhone' ;
        $wlp_phone_png_icon = (get_sub_field('witlandingpages_phone_png')) ? get_sub_field('witlandingpages_phone_png')['url'] : '' ;
        $wlp_phone_png_icon_hvr = (get_sub_field('witlandingpages_phone_png_hover')) ? get_sub_field('witlandingpages_phone_png_hover')['url'] : '' ;
        $wlp_phone_svg_icon = (get_sub_field('witlandingpages_phone_svg')) ? get_sub_field('witlandingpages_phone_svg')['url'] : '' ;
        $wlp_phone_svg_filter = (get_sub_field('witlandingpages_phone_custom_icon_filter')) ? get_sub_field('witlandingpages_phone_custom_icon_filter') : '' ;
        $wlp_phone_svg_filter_hvr = (get_sub_field('witlandingpages_phone_custom_icon_filter_hover')) ? get_sub_field('witlandingpages_phone_custom_icon_filter_hover') : '' ;
    
        endwhile;
     endif; 

     // <style> variables:
        $wlp_styles_phone_bkgnd = "background-color: " . $wlp_phone_background . ";";
        $wlp_styles_phone_bkgnd_hvr = "background-color: " . $wlp_phone_background_hvr . ";";
        $wlp_styles_phone_rad = "border-radius: " . $wlp_phone_border_radius . "rem;";
        $wlp_styles_phone_body_color = "color: " . $wlp_phone_body_color . ";";
        $wlp_styles_pbc_hover = "color: " . $wlp_phone_body_color_hover . ";";
        $wlp_styles_phone_std_filter = "filter: " . $wlp_phone_default_filter; // DO NOT include extra semi-colon here. Field value brings it over.
        $wlp_styles_phone_std_hvr = "filter: " . $wlp_phone_default_filter_hvr; // DO NOT include extra semi-colon here. Field value brings it over.
        $wlp_styles_phone_png = 'background: url(' . $wlp_phone_png_icon . ') center / cover;';
        $wlp_styles_phone_png_hvr = 'background: url(' . $wlp_phone_png_icon_hvr . ') center / cover;';
        $wlp_styles_phone_svg = 'background: url(' . $wlp_phone_svg_icon . ') center / cover;';
        $wlp_styles_phone_custom_filter = "filter: " . $wlp_phone_svg_filter; // DO NOT include extra semi-colon here. Field value brings it over.
        $wlp_styles_phone_custom_hvr = "filter: " . $wlp_phone_svg_filter_hvr; // DO NOT include extra semi-colon here. Field value brings it over.

        ?>

        <style>
        .phoneBtn {
            <?php echo $wlp_styles_phone_bkgnd ?>
            <?php echo $wlp_styles_phone_rad ?>
        }
        /* default phone icon */
        .phoneBtn:before {
            content: "";
            <?php echo $wlp_style_call_btn ?>
            position: absolute;
            transform: translateY(65%);
            left: 94px;
            width: 17px;
            height: 17px;
            <?php echo $wlp_styles_phone_std_filter ?>
        }
        .phoneBtn:before {
            <?php $wlp_styles_phone_std_hvr ?>
        }
        /* custom phone PNG */
        .pngPhone.phoneBtn:before {
            <?php echo $wlp_styles_phone_png ?>
            filter: unset;
        }
        .pngPhone.phoneBtn:hover:before {
            <?php echo $wlp_styles_phone_png_hvr ?>
            filter: unset;
        }
        /* custom phone SVG */
        .svgPhone.phoneBtn:before {
            <?php echo $wlp_styles_phone_svg ?>
            <?php echo $wlp_styles_phone_custom_filter ?>
        }
        .svgPhone.phoneBtn:hover:before {
            <?php echo $wlp_styles_phone_svg_hvr ?>
            <?php echo $wlp_styles_phone_custom_hvr ?>
        }

        .phoneBtn:hover {
            <?php echo $wlp_styles_phone_bkgnd_hvr ?>
        }

        .phoneBtnBody {
            margin-left: 1rem;
            <?php echo $wlp_styles_phone_body_color ?>
        }
        .phoneBtnBody:hover {
            <?php echo $wlp_styles_pbc_hover ?>
        }
        </style>

        <div class="flex items-center justify-center mx-auto my-0 phoneBtns flex-nowrap max-w-340">
            <div class="phoneBtnItem mb-2.5">
                <!-- for custom icon: -->
                <?php if($wlp_phone_if_custom == 'customPhone'): ?>

                <a href="tel:<?php echo $wlp_phone_1_href ?>" class="px-8 py-2 text-base font-bold phoneBtn btn customPhone <?php echo $wlp_phone_png_svg ?> ">

                <?php else: ?>
                <!-- for default icon: -->

                <a href="tel:<?php echo $wlp_phone_1_href ?>" class="px-8 py-2 text-base font-bold phoneBtn btn defaultPhone">

                <?php endif; ?>
                
                <!-- this stays the same, regardless of above logic: -->
                    <span class="phoneBtnBody"><?php echo $wlp_phone_1_display ?></span>
                </a>
            </div>

        </div>

        <?php return ob_get_clean(); // stop buffer
        
};
add_shortcode('witlandingpages_one_phone', 'witlandingpages_one_phone'); ?>

<?php 
/* ==========================================================================
   TWO PHONE NUMBERS
   ========================================================================== */

   function witlandingpages_two_phones( $atts ) {
    ob_start(); //start buffer to output after the_content()

    extract(shortcode_atts(array(
        'class' => '',
      ), $atts));

    // declare phone button variables:

    $wlp_phone_1_href = (get_field('witlandingpages_phone_link')) ? get_field('witlandingpages_phone_link') : '' ;
    $wlp_phone_2_href = (get_field('witlandingpages_phone_2_link')) ? get_field('witlandingpages_phone_2_link') : '' ;
    $wlp_phone_1_display = (get_field('witlandingpages_phone_format')) ? get_field('witlandingpages_phone_format') : '' ;
    $wlp_phone_2_display = (get_field('witlandingpages_phone_2_format')) ? get_field('witlandingpages_phone_2_format') : '' ;
    $wlp_phone_1_location = (get_field('witlandingpages_phone_location')) ? get_field('witlandingpages_phone_location') : '' ;
    $wlp_phone_2_location = (get_field('witlandingpages_phone_2_location')) ? get_field('witlandingpages_phone_2_location') : '' ;
    $wlp_call_button_icon = '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/phone-alt-solid.svg' ;
    $wlp_style_call_btn = 'background: url(' . $wlp_call_button_icon . ') center / cover;';

       // Style Variables:
       if( have_rows('witlandingpages_phone_styling', 'option') ) :
        while( have_rows('witlandingpages_phone_styling', 'option') ): the_row();
    
        $wlp_phone_background = (get_sub_field('witlandingpages_phone_background_color')) ? get_sub_field('witlandingpages_phone_background_color') : 'white' ;
        $wlp_phone_background_hvr = (get_sub_field('witlandingpages_phone_background_color_hover')) ? get_sub_field('witlandingpages_phone_background_color_hover') : '' ;
        $wlp_phone_border_radius = (get_sub_field('witlandingpages_phone_border_radius')) ? get_sub_field('witlandingpages_phone_border_radius') : '1' ;
        $wlp_phone_body_color = (get_sub_field('witlandingpages_phone_body_color')) ? get_sub_field('witlandingpages_phone_body_color') : 'black' ;
        $wlp_phone_body_color_hover = (get_sub_field('witlandingpages_phone_body_color_hover')) ? get_sub_field('witlandingpages_phone_body_color_hover') : '' ;
        $wlp_phone_default_filter = (get_sub_field('witlandingpages_phone_default_icon_filter')) ? get_sub_field('witlandingpages_phone_default_icon_filter') : '' ;
        $wlp_phone_default_filter_hvr = (get_sub_field('witlandingpages_phone_default_filter_hover')) ? get_sub_field('witlandingpages_phone_default_filter_hover') : '' ;
        $wlp_phone_if_custom = (get_sub_field('witlandingpages_phone_custom_icon')) == '1' ? 'customPhone' : 'defaultPhone' ;
        $wlp_phone_png_svg = (get_sub_field('witlandingpages_phone_png_svg')) == 'PNG' ? 'pngPhone' : 'svgPhone' ;
        $wlp_phone_png_icon = (get_sub_field('witlandingpages_phone_png')) ? get_sub_field('witlandingpages_phone_png')['url'] : '' ;
        $wlp_phone_png_icon_hvr = (get_sub_field('witlandingpages_phone_png_hover')) ? get_sub_field('witlandingpages_phone_png_hover')['url'] : '' ;
        $wlp_phone_svg_icon = (get_sub_field('witlandingpages_phone_svg')) ? get_sub_field('witlandingpages_phone_svg')['url'] : '' ;
        $wlp_phone_svg_filter = (get_sub_field('witlandingpages_phone_custom_icon_filter')) ? get_sub_field('witlandingpages_phone_custom_icon_filter') : '' ;
        $wlp_phone_svg_filter_hvr = (get_sub_field('witlandingpages_phone_custom_icon_filter_hover')) ? get_sub_field('witlandingpages_phone_custom_icon_filter_hover') : '' ;
    
        endwhile;
     endif; 

     // <style> variables:
        $wlp_styles_phone_bkgnd = "background-color: " . $wlp_phone_background . ";";
        $wlp_styles_phone_bkgnd_hvr = "background-color: " . $wlp_phone_background_hvr . ";";
        $wlp_styles_phone_rad = "border-radius: " . $wlp_phone_border_radius . "rem;";
        $wlp_styles_phone_body_color = "color: " . $wlp_phone_body_color . ";";
        $wlp_styles_pbc_hover = "color: " . $wlp_phone_body_color_hover . ";";
        $wlp_styles_phone_std_filter = "filter: " . $wlp_phone_default_filter; // DO NOT include extra semi-colon here. Field value brings it over.
        $wlp_styles_phone_std_hvr = "filter: " . $wlp_phone_default_filter_hvr; // DO NOT include extra semi-colon here. Field value brings it over.
        $wlp_styles_phone_png = 'background: url(' . $wlp_phone_png_icon . ') center / cover;';
        $wlp_styles_phone_png_hvr = 'background: url(' . $wlp_phone_png_icon_hvr . ') center / cover;';
        $wlp_styles_phone_svg = 'background: url(' . $wlp_phone_svg_icon . ') center / cover;';
        $wlp_styles_phone_custom_filter = "filter: " . $wlp_phone_svg_filter; // DO NOT include extra semi-colon here. Field value brings it over.
        $wlp_styles_phone_custom_hvr = "filter: " . $wlp_phone_svg_filter_hvr; // DO NOT include extra semi-colon here. Field value brings it over.

        ?>

        <style>
        .phoneBtn {
            <?php echo $wlp_styles_phone_bkgnd ?>
            <?php echo $wlp_styles_phone_rad ?>
        }
        /* default phone icon */
        .phoneBtn:before {
            content: "";
            <?php echo $wlp_style_call_btn ?>
            position: absolute;
            transform: translateY(65%);
            left: 36px;
            width: 17px;
            height: 17px;
            <?php echo $wlp_styles_phone_std_filter ?>
        }
        .phoneBtn:before {
            <?php $wlp_styles_phone_std_hvr ?>
        }
        /* custom phone PNG */
        .pngPhone.phoneBtn:before {
            <?php echo $wlp_styles_phone_png ?>
            filter: unset;
        }
        .pngPhone.phoneBtn:hover:before {
            <?php echo $wlp_styles_phone_png_hvr ?>
            filter: unset;
        }
        /* custom phone SVG */
        .svgPhone.phoneBtn:before {
            <?php echo $wlp_styles_phone_svg ?>
            <?php echo $wlp_styles_phone_custom_filter ?>
        }
        .svgPhone.phoneBtn:hover:before {
            <?php echo $wlp_styles_phone_svg_hvr ?>
            <?php echo $wlp_styles_phone_custom_hvr ?>
        }

        .phoneBtn:hover {
            <?php echo $wlp_styles_phone_bkgnd_hvr ?>
        }

        .phoneBtnBody {
            margin-left: 1rem;
            <?php echo $wlp_styles_phone_body_color ?>
        }
        .phoneBtnBody:hover {
            <?php echo $wlp_styles_pbc_hover ?>
        }
        </style>

        <div class="flex items-center justify-between mx-auto my-0 phoneBtns flex-nowrap max-w-450">
            <!-- First Phone Number -->
            <div class="phoneBtnItem mb-2.5">
                <span class="phoneBtnItemLocation block mb-1.5 font-bold"><?php echo $wlp_phone_1_location ?></span>
                <!-- for custom icon: -->
                <?php if($wlp_phone_if_custom == 'customPhone'): ?>

                    <a href="tel:<?php echo $wlp_phone_1_href ?>" class="px-8 py-2 text-base font-bold phoneBtn btn customPhone <?php echo $wlp_phone_png_svg ?> ">

                <?php else: ?>
                    <!-- for default icon: -->

                    <a href="tel:<?php echo $wlp_phone_1_href ?>" class="px-8 py-2 text-base font-bold phoneBtn btn defaultPhone">

                <?php endif; ?>
                
                <!-- this stays the same, regardless of above logic: -->
                    <span class="phoneBtnBody"><?php echo $wlp_phone_1_display ?></span>
                </a>
            </div> <!-- end First Phone Number -->

            <!-- Second Phone Number -->
            <div class="phoneBtnItem mb-2.5">
                <span class="phoneBtnItemLocation block mb-1.5 font-bold"><?php echo $wlp_phone_2_location ?></span>
                <!-- for custom icon: -->
                <?php if($wlp_phone_if_custom == 'customPhone'): ?>

                    <a href="tel:<?php echo $wlp_phone_2_href ?>" class="px-8 py-2 text-base font-bold phoneBtn btn customPhone <?php echo $wlp_phone_png_svg ?> ">

                <?php else: ?>
                    <!-- for default icon: -->

                    <a href="tel:<?php echo $wlp_phone_2_href ?>" class="px-8 py-2 text-base font-bold phoneBtn btn defaultPhone">

                <?php endif; ?>
                
                <!-- this stays the same, regardless of above logic: -->
                    <span class="phoneBtnBody"><?php echo $wlp_phone_2_display ?></span>
                </a>
            </div> <!-- end Second Phone Number -->

        </div>

        <?php return ob_get_clean(); // stop buffer
        
};
add_shortcode('witlandingpages_two_phones', 'witlandingpages_two_phones'); ?>

