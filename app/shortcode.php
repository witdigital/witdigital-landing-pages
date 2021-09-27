<?php 

// Shortcodes for phone button and Request Service button


// Phone Button (with ONE phone number):

function witlandingpages_phone_button( $atts ) {
    extract(shortcode_atts(array(
        'class' => '',
      ), $atts));

    // declare phone button variables:

    $wlp_phone_1_href = (get_field('witlandingpages_phone_link')) ? get_field('witlandingpages_phone_link') : '' ;
    $wlp_phone_1_display = (get_field('witlandingpages_phone_format')) ? get_field('witlandingpages_phone_format') : '' ;
    $wlp_phone_1_location = (get_field('witlandingpages_phone_location')) ? get_field('witlandingpages_phone_location') : '' ;
    $wlp_call_button_icon = '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/phone-alt-solid.svg" /' ;

       // Style Variables:
       if( have_rows('witlandingpages_phone_styling') ) :
        while( have_rows('witlandingpages_phone_styling') ): the_row();
    
        $wlp_phone_background = (get_sub_field('witlandingpages_phone_background_color')) ? get_sub_field('witlandingpages_phone_background_color') : '' ;
        $wlp_phone_border_radius = (get_sub_field('witlandingpages_phone_border_radius')) ? get_sub_field('witlandingpages_phone_border_radius') : '' ;
        $wlp_phone_location_color = (get_sub_field('witlandingpages_phone_location_color')) ? get_sub_field('witlandingpages_phone_location_color') : '' ;
        $wlp_phone_body_color = (get_sub_field('witlandingpages_phone_body_color')) ? get_sub_field('witlandingpages_phone_body_color') : '' ;
        $wlp_phone_body_color_hover = (get_sub_field('witlandingpages_phone_body_color_hover')) ? get_sub_field('witlandingpages_phone_body_color_hover') : '' ;
        // $wlp_phone_if_custom = (get_sub_field('witlandingpages_phone_custom_icon')) == '1' ? 'customPhone' : 'defaultPhone' ;
        $wlp_phone_default_filter = (get_sub_field('witlandingpages_phone_default_icon_filter')) ? get_sub_field('witlandingpages_phone_default_icon_filter') : '' ;
        // $wlp_phone_png_svg = (get_sub_field('witlandingpages_phone_png_svg')) == 'PNG' ? 'pngPhone' : 'svgPhone' ;
        // $wlp_phone_png = (get_sub_field('witlandingpages_phone_png')) ? get_sub_field('witlandingpages_phone_png')['url'] : '' ;
        // $wlp_phone_png_hover = (get_sub_field('witlandingpages_phone_png_hover')) ? get_sub_field('witlandingpages_phone_png_hover')['url'] : '' ;
        // $wlp_phone_svg_filter = (get_sub_field('witlandingpages_phone_custom_icon_filter')) ? get_sub_field('witlandingpages_phone_custom_icon_filter') : '' ;
        // $wlp_phone_svg_filter_hover = (get_sub_field('witlandingpages_phone_custom_icon_filter_hover')) ? get_sub_field('witlandingpages_phone_custom_icon_filter_hover') : '' ;
        // $wlp_phone_svg = (get_sub_field('witlandingpages_phone_svg')) ? get_sub_field('witlandingpages_phone_svg')['url'] : '' ;
    
        endwhile;
     endif; 

     // <style> variables:
        $wlp_styles_phone_bkgnd = "background-color: " . $wlp_phone_background . ";";
        $wlp_styles_phone_rad = "border-radius: " . $wlp_phone_border_radius . "rem;";
        $wlp_styles_phone_loc_color = "color: " . $wlp_phone_location_color . ";";
        $wlp_styles_phone_body_color = "color: " . $wlp_phone_body_color . ";";
        $wlp_styles_pbc_hover = "color: " . $wlp_phone_body_color_hover . ";";
        $wlp_styles_phone_std_filter = "filter: " . $wlp_phone_default_filter; // DO NOT include extra semi-colon here. Field value brings it over.
        // $wlp_styles_phone_custom_filter = "filter: " . $wlp_phone_svg_filter; // DO NOT include extra semi-colon here. Field value brings it over.
        // $wlp_styles_pcf_hover = "filter: " . $wlp_phone_svg_filter_hover; // DO NOT include extra semi-colon here. Field value brings it over.
    
        // $wlp_phone_style_png = 'background: url(' . $wlp_phone_png . ') center / cover;';
        // $wlp_phone_style_png_hover = 'background: url(' . $wlp_phone_png_hover . ') center / cover;';
        // $wlp_phone_style_svg = 'background: url(' . $wlp_phone_svg . ') center / cover;';


    $wlp_phonedisplay_div = 
        '<style>
        .phoneBtnItemLocation {' .  $wlp_styles_phone_loc_color . '}
        .phoneBtn {' . $wlp_styles_phone_bkgnd . $wlp_styles_phone_rad . '}
        .phoneBtnBody {' . $wlp_styles_phone_body_color . '}
        .phoneBtnBody:hover {' . $wlp_styles_pbc_hover . '}
        </style>

        <div class="flex items-center justify-center mx-auto my-0 phoneBtns flex-nowrap max-w-340">
            <div class="phoneBtnItem mb-2.5">
                <span class="phoneBtnItemLocation block mb-1.5 font-bold">' . $wlp_phone_1_location . '</span>
                <a href="tel:' . $wlp_phone_1_href . ' " class="px-3 py-2 text-base font-bold phoneBtn btn"><img class="inline-block mr-1 w-3.5 align-middle iconImageFilter" src="' . $wlp_call_button_icon . ' " /> <span class="phoneBtnBody">' . $wlp_phone_1_display . '</span></a>
            </div>

        </div>' ;

        return $wlp_phonedisplay_div;
};
add_shortcode('witlandingpages_phone_button', 'witlandingpages_phone_button');


// Phone Button (with TWO phone numbers):

function witlandingpages_twophones_button( $atts ) {
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
    $wlp_call_button_icon = (get_field('witlandingpages_phone_icon')) ? get_field('witlandingpages_phone_icon')['url'] : '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/phone-alt-solid.svg" /' ;

    $wlp_twophonedisplay_div = 
        '<div class="flex items-center justify-between mx-auto my-0 phoneBtns flex-nowrap max-w-340">
            <div class="phoneBtnItem mb-2.5">
                <span class="phoneBtnItemLocation block mb-1.5 font-bold">' . $wlp_phone_1_location . '</span>
                <a href="tel:' . $wlp_phone_1_href . ' " class="px-3 py-2 text-base font-bold bg-white rounded-md phoneBtn btn"><img class="inline-block mr-1 w-3.5 align-middle iconImageFilter" src="' . $wlp_call_button_icon . ' " /> <span class="">' . $wlp_phone_1_display . '</span></a>
            </div>

            <div class="phoneBtnItem mb-2.5">
                <span class="phoneBtnItemLocation block mb-1.5 font-bold">' . $wlp_phone_2_location . '</span>
                <a href="tel:' . $wlp_phone_2_href . ' " class="px-3 py-2 text-base font-bold bg-white rounded-md phoneBtn btn"><img class="inline-block
                mr-1 w-3.5 align-middle iconImageFilter" src=" ' . $wlp_call_button_icon . ' " /> <span class=""> ' . $wlp_phone_2_display  . '</span></a>
            </div>

        </div>' ;

        return $wlp_twophonedisplay_div;
};
add_shortcode('witlandingpages_twophones_button', 'witlandingpages_twophones_button');

// Request Service button:

function witlandingpages_request_button( $atts ) {
    extract(shortcode_atts(array(
        'class' => '',
      ), $atts));

    // declare variables:
    $wlp_request_url = (get_field('witlandingpages_request_url')) ? get_field('witlandingpages_request_url') : '' ;
    $wlp_request_display = (get_field('witlandingpages_request_display')) ? get_field('witlandingpages_request_display') : '' ;

    $wlp_request_button_div = '
        <div class="requestButton">
        <a class="px-3 py-2 text-base font-bold uppercase bg-white rounded-md phoneBtn btn" href=" ' . $wlp_request_url . ' ">' . $wlp_request_display . '</a>
        </div>' ;

        return $wlp_request_button_div;

};
add_shortcode('witlandingpages_request_button', 'witlandingpages_request_button');



