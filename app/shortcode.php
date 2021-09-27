<?php 

// Shortcodes for phone button and Request Service button


// Phone Button:

function witlandingpages_phone_button( $atts ) {
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

    $wlp_phonedisplay_div = 
        '<div class="mt-3 text-center text-white servicesHeroCall laptop:mt-6">

        <div class="flex items-center justify-between mx-auto my-0 phoneBtns flex-nowrap max-w-340">
            <div class="phoneBtnItem mb-2.5">
                <span class="phoneBtnItemLocation block mb-1.5 font-bold">' . $wlp_phone_1_location . '</span>
                <a href="tel:' . $wlp_phone_1_href . ' " class="px-3 py-2 text-base font-bold bg-white rounded-md phoneBtn btn"><img class="inline-block mr-1 w-3.5 align-middle iconImageFilter" src="' . $wlp_call_button_icon . ' " /> <span class="">' . $wlp_phone_1_display . '</span></a>
            </div>

            <div class="phoneBtnItem mb-2.5">
                <span class="phoneBtnItemLocation block mb-1.5 font-bold">' . $wlp_phone_2_location . '</span>
                <a href="tel:' . $wlp_phone_2_href . ' " class="px-3 py-2 text-base font-bold bg-white rounded-md phoneBtn btn"><img class="inline-block
                mr-1 w-3.5 align-middle iconImageFilter" src=" ' . $wlp_call_button_icon . ' " /> <span class=""> ' . $wlp_phone_2_display  . '</span></a>
            </div>
         

            </div>

        </div>' ;

        return $wlp_phonedisplay_div;
};
add_shortcode('witlandingpages_phone_button', 'witlandingpages_phone_button');



