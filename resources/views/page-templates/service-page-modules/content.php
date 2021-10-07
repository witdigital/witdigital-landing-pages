
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('witlandingpages_coupon_title', 'witlandingpages_coupon_subtitle', 'witlandingpages_coupon_image', 'witlandingpages_location', 'witlandingpages_locations_url', 'witlandingpages_locations_button');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>
<?php 
    $witlandingpages_coupon_title = (get_field('witlandingpages_coupon_title')) ? get_field('witlandingpages_coupon_title') : '' ;
    $witlandingpages_coupon_subtitle = (get_field('witlandingpages_coupon_subtitle')) ? get_field('witlandingpages_coupon_subtitle') : '' ;
    $witlandingpages_coupon_image = (get_field('witlandingpages_coupon_image')) ? get_field('witlandingpages_coupon_image')['url'] : '' ;
    $wlp_location_title = (get_field('witlandingpages_locations_title')) ? get_field('witlandingpages_locations_title') : '' ;
    $map_icon = '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/map-marker-alt-solid.svg';
    $witlandingpages_locations_url = (get_field('witlandingpages_locations_url')) ? get_field('witlandingpages_locations_url') : '' ;
    $witlandingpages_locations_button = (get_field('witlandingpages_locations_button')) ? get_field('witlandingpages_locations_button') : '' ;
    $wlp_plus_icon = '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/plus-circle-solid.svg';
    $wlp_minus_icon = '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/minus-circle-solid.svg';
    $wlp_plus_style = 'background: url(' . $wlp_plus_icon . ') center / cover;';
    $wlp_minus_style = 'background: url(' . $wlp_minus_icon . ') center / cover;';
    $wlp_show_coupon = (get_field('witlandingpages_show_coupon')) ? get_field('witlandingpages_show_coupon') : '' ;

    // Accordion Variables:
    if( have_rows('witlandingpages_accordion_styling') ) :
        while( have_rows('witlandingpages_accordion_styling') ): the_row();
    
        $wlp_ac_background = (get_sub_field('witlandingpages_accordion_background_color')) ? get_sub_field('witlandingpages_accordion_background_color') : 'lightgray' ;
        $wlp_ac_border_radius = (get_sub_field('witlandingpages_accordion_border_radius')) ? get_sub_field('witlandingpages_accordion_border_radius') : '1' ;
        $wlp_ac_section_title_color = (get_sub_field('witlandingpages_accordion_section_title_color')) ? get_sub_field('witlandingpages_accordion_section_title_color') : '' ;
        $wlp_ac_title_color = (get_sub_field('witlandingpages_accordion_title_color')) ? get_sub_field('witlandingpages_accordion_title_color') : '' ;
        $wlp_ac_if_custom = (get_sub_field('witlandingpages_accordion_custom_icon')) == '1' ? 'customIcon' : 'defaultIcon' ;
        $wlp_ac_default_filter = (get_sub_field('witlandingpages_accordion_default_icon_filter')) ? get_sub_field('witlandingpages_accordion_default_icon_filter') : '' ;
        $wlp_ac_png_svg = (get_sub_field('witlandingpages_accordion_png_svg')) == 'PNG' ? 'pngIcon' : 'svgIcon' ;
        $wlp_plus_png = (get_sub_field('witlandingpages_accordion_plus_png')) ? get_sub_field('witlandingpages_accordion_plus_png')['url'] : '' ;
        $wlp_minus_png = (get_sub_field('witlandingpages_accordion_minus_png')) ? get_sub_field('witlandingpages_accordion_minus_png')['url'] : '' ;
        $wlp_ac_svg_filter = (get_sub_field('witlandingpages_accordion_svg_filter')) ? get_sub_field('witlandingpages_accordion_svg_filter') : '' ;
        $wlp_plus_svg = (get_sub_field('witlandingpages_accordion_plus_svg')) ? get_sub_field('witlandingpages_accordion_plus_svg')['url'] : '' ;
        $wlp_minus_svg = (get_sub_field('witlandingpages_accordion_minus_svg')) ? get_sub_field('witlandingpages_accordion_minus_svg')['url'] : '' ;
    
        endwhile;
    endif; 

    // Accordion Styling Variables:
    $wlp_styles_ac_bkgnd = "background-color: " . $wlp_ac_background . ";";
    $wlp_styles_ac_rad = "border-radius: " . $wlp_ac_border_radius . "rem;";
    $wlp_styles_ac_section_title_color = "color: " . $wlp_ac_section_title_color . ";";
    $wlp_styles_ac_title_color = "color: " . $wlp_ac_title_color . ";";
    $wlp_styles_std_filter = "filter: " . $wlp_ac_default_filter; // DO NOT include extra semi-colon here. Field value brings it over.
    $wlp_styles_custom_filter = "filter: " . $wlp_ac_svg_filter; // DO NOT include extra semi-colon here. Field value brings it over.

    $wlp_plus_style_png = 'background: url(' . $wlp_plus_png . ') center / cover;';
    $wlp_minus_style_png = 'background: url(' . $wlp_minus_png . ') center / cover;';
    $wlp_plus_style_svg = 'background: url(' . $wlp_plus_svg . ') center / cover;';
    $wlp_minus_style_svg = 'background: url(' . $wlp_minus_svg . ') center / cover;';

    // Coupon Variables:
    if( have_rows('witlandingpages_coupon_styling') ) :
        while( have_rows('witlandingpages_coupon_styling') ): the_row();

        $wlp_coupon_background = (get_sub_field('witlandingpages_coupon_background')) ? get_sub_field('witlandingpages_coupon_background') : '' ;
        $wlp_coupon_border_radius = (get_sub_field('witlandingpages_coupon_border_radius')) ? get_sub_field('witlandingpages_coupon_border_radius') : '1' ;
    
        endwhile;
    endif;

    // Coupon Styling Variables:
    $wlp_styles_coupon_bkgnd = "background-color: " . $wlp_coupon_background . ";";
    $wlp_styles_coupon_rad = "border-radius: " . $wlp_coupon_border_radius . "rem;";


    // Location Block Variables:
    if( have_rows('witlandingpages_locations_styling') ) :
        while( have_rows('witlandingpages_locations_styling') ): the_row();

        $wlp_locations_background = (get_sub_field('witlandingpages_locations_background')) ? get_sub_field('witlandingpages_locations_background') : '' ;
        $wlp_locations_border_radius = (get_sub_field('witlandingpages_locations_border_radius')) ? get_sub_field('witlandingpages_locations_border_radius') : '1' ;
    
        endwhile;
    endif;

    $wlp_indiv_locations_color = (get_field('witlandingpages_locations_list_color')) ? get_field('witlandingpages_locations_list_color') : '' ;

    // Location Block Styling Variables:
    $wlp_styles_locations_bkgnd = "background-color: " . $wlp_locations_background . ";";
    $wlp_styles_locations_rad = "border-radius: " . $wlp_locations_border_radius . "rem;";
    $wlp_styles_indiv_loc_color = "color: " . $wlp_indiv_locations_color . ";";


    // Map Pin Variables:
    if( have_rows('witlandingpages_map_pin_styling') ) :
        while( have_rows('witlandingpages_map_pin_styling') ): the_row();
    
        $wlp_map_if_custom = (get_sub_field('witlandingpages_custom_map_pin')) == '1' ? 'customPin' : 'defaultPin' ;
        $wlp_map_default_filter = (get_sub_field('witlandingpages_default_pin_filter')) ? get_sub_field('witlandingpages_default_pin_filter') : '' ;
        $wlp_map_png_svg = (get_sub_field('witlandingpages_pin_png_svg')) == 'PNG' ? 'pngPin' : 'svgPin' ;
        $wlp_map_png = (get_sub_field('witlandingpages_pin_png')) ? get_sub_field('witlandingpages_pin_png')['url'] : '' ;
        $wlp_map_svg_filter = (get_sub_field('witlandingpages_pin_svg_filter')) ? get_sub_field('witlandingpages_pin_svg_filter') : '' ;
        $wlp_map_svg = (get_sub_field('witlandingpages_pin_svg')) ? get_sub_field('witlandingpages_pin_svg')['url'] : '' ;
    
        endwhile;
    endif; 

    // Map Pin Styling Variables:
    $wlp_styles_std_pin_filter = "filter: " . $wlp_map_default_filter; // DO NOT include extra semi-colon here. Field value brings it over.
    $wlp_styles_custom_pin_filter = "filter: " . $wlp_map_svg_filter; // DO NOT include extra semi-colon here. Field value brings it over.


    // All Locations Button Variables:
    if( have_rows('witlandingpages_locations_button_styling') ) :
        while( have_rows('witlandingpages_locations_button_styling') ): the_row();
    
        $wlp_loc_btn_background = (get_sub_field('witlandingpages_all_locations_background')) ? get_sub_field('witlandingpages_all_locations_background') : '' ;
        $wlp_loc_btn_border_radius = (get_sub_field('witlandingpages_all_locations_border_radius')) ? get_sub_field('witlandingpages_all_locations_border_radius') : '1' ;
        $wlp_loc_btn_border_color = (get_sub_field('witlandingpages_all_locations_border_color')) ? get_sub_field('witlandingpages_all_locations_border_color') : 'white' ;
        $wlp_loc_btn_color = (get_sub_field('witlandingpages_all_locations_color')) ? get_sub_field('witlandingpages_all_locations_color') : '' ;
    
        endwhile;
    endif; 

    // All Locations Button Styling Variables:
    $wlp_styles_loc_btn_bkgrnd = "background-color: " . $wlp_loc_btn_background . ";";
    $wlp_styles_loc_btn_rad = "border-radius: " . $wlp_loc_btn_border_radius . "rem;";
    $wlp_styles_loc_btn_border_color = "border-color: " . $wlp_loc_btn_border_color . "!important;";
    $wlp_styles_loc_btn_color = "color: " . $wlp_loc_btn_color . "!important;";

    // Additional CSS:
    $wlp_ac_css = (get_field('witlandingpages_ac_additional_css')) ? get_field('witlandingpages_ac_additional_css') : '' ;
?>
<!--  ==========================================================================
                BEGIN STYLING FOR MODULE
    ==========================================================================  -->
    <style>
        <?php echo $wlp_ac_css ?>
        
        .accordionitem:first-of-type .accordionTitle {
            <?php echo $wlp_styles_ac_section_title_color; ?>
        }
        .accordionitem:not(:first-of-type) .accordionTitle {
            <?php echo $wlp_styles_ac_bkgnd; ?>
            <?php echo $wlp_styles_ac_rad; ?>
            <?php echo $wlp_styles_ac_title_color; ?>
            padding: 16px 30px;
            font-size: 24px;
            cursor: pointer;
        }
        /* default plus icon and corresponding filter */
        .accordionitem:not(:first-of-type) .accordionTitle::after {
            content: "";
            <?php echo $wlp_plus_style ?>
            position: absolute;
            top: 43%;
            transform: translateY(-50%);
            right: 15px;
            width: 24px;
            height: 24px;
            <?php echo $wlp_styles_std_filter ?>
        }
        /* custom PNG plus icon */
        .accordionitem:not(:first-of-type) .pngIcon.accordionTitle::after {
            <?php echo $wlp_plus_style_png ?>
            filter: unset;
        }
        /* custom SVG plus icon and corresponding filter */
        .accordionitem:not(:first-of-type) .svgIcon.accordionTitle::after {
            <?php echo $wlp_plus_style_svg ?>
            <?php echo $wlp_styles_custom_filter ?>
        }
        .accordionitem:not(:first-of-type) .accordionContent {
            max-height: 0;
            opacity: 0;
            overflow: hidden
        }
        /* default minus icon */
        .active.accordionitem:not(:first-of-type) .accordionTitle::after {
            <?php echo $wlp_minus_style ?>
        }
        /* custom PNG minus icon */
        .active.accordionitem:not(:first-of-type) .pngIcon.accordionTitle::after {
            <?php echo $wlp_minus_style_png ?>
            filter: unset;
        }
        /* custom SVG minus icon */
        .active.accordionitem:not(:first-of-type) .svgIcon.accordionTitle::after {
            <?php echo $wlp_minus_style_svg ?>
            <?php echo $wlp_styles_custom_filter ?>
        }
        .active.accordionitem:not(:first-of-type) .accordionContent {
            max-height: 1000px;
            opacity: 1;
        }

        /* Coupon Styling */
        .sidebarCouponSectionInner {
            <?php echo $wlp_styles_coupon_bkgnd ?>
            <?php echo $wlp_styles_coupon_rad ?>
        }

        /* Location Block Styling */
        .sidebarSectionLocations {
            <?php echo $wlp_styles_locations_bkgnd ?>
            <?php echo $wlp_styles_locations_rad ?>
        }
        .locationItem span {
            <?php echo $wlp_styles_indiv_loc_color ?>
        }

        /* Map Pin styling */
        .locationItem img, .moreLocations img {
            <?php echo $wlp_styles_std_pin_filter ?>
        }
        img.pngPin {
            filter: unset;
        }
        img.svgPin {
            <?php echo $wlp_styles_custom_pin_filter ?>
        }

        /* More Locations button styling */
        .moreLocations {
            <?php echo $wlp_styles_loc_btn_bkgrnd ?>
            <?php echo $wlp_styles_loc_btn_rad ?>
            <?php echo $wlp_styles_loc_btn_border_color ?>
            <?php echo $wlp_styles_loc_btn_color ?>
        }
        .moreLocations:hover {
            cursor: pointer;
        }

    </style>

<!--  ==========================================================================
                BEGIN TEMPLATE FOR MODULE
    ==========================================================================  -->

<div class="servicesContent">
    <div class="flex flex-wrap justify-between px-2 mx-auto servicesContentInner max-w-1150">
        <div class="flex-grow order-2 px-2 pt-0 pb-1 servicesContentLeft laptop:flex-1 max-w-650 laptop:pt-0 laptop:px-0 laptop:pb-10 laptop:order-none">
            <?php
            if(have_rows('witlandingpages_accordion')):
                $i == 0;
                while(have_rows('witlandingpages_accordion')):the_row(); $i++; ?>
                <?php 
                $wlp_ac_title = (get_sub_field('witlandingpages_accordion_title')) ? get_sub_field('witlandingpages_accordion_title') : '' ; 
                $wlp_ac_content = (get_sub_field('witlandingpages_accordion_content')) ? get_sub_field('witlandingpages_accordion_content') : '' ; ?>
                
                    <!-- for custom icon: -->
                    <?php if($wlp_ac_if_custom == 'customIcon'): ?>

                        <div class="servicesContentItem accordionitem text-base mb-4 customIcon <?php echo $i < 2 ? 'desktopNoAccordion' : ''; ?>">
                        <h3 class="relative servicesContentTitle accordionTitle <?php echo $wlp_ac_png_svg ?>"><?php echo $wlp_ac_title ?></h3>
                    <?php else: ?>
                        <!-- for default icon: -->

                        <div class="servicesContentItem accordionitem text-base mb-4 defaultIcon <?php echo $i < 2 ? 'desktopNoAccordion' : ''; ?>">
                        <h3 class="relative servicesContentTitle accordionTitle"><?php echo $wlp_ac_title ?></h3>

                    <?php endif; ?>
                    <!-- this stays the same, regardless of above logic: -->
                        <div class="m-2 servicesContentText accordionContent"><?php echo $wlp_ac_content ?></div>
                    </div>
                <?php endwhile;
            endif;
            ?>
        </div>
        
        <div class="flex-1 order-1 w-full px-0 py-2 mt-5 servicesContentRight laptop:-right-8 max-w-400 laptop:pl-6 laptop:pb-10 laptop:order-none laptop:mt-auto">
            <div class="mb-4 servicesContentRightInner sidebar">

            <?php if($wlp_show_coupon == '1'): ?>

                <div class="mb-5 servicesContentSidebarSection sidebarCouponSection">
                    <div class="text-center sidebarCouponSectionInner sidebarSectionInner bg-blue rounded-2xl">
                        <div class="absolute z-10 couponBorder rounded-2xl"></div>
                            <div class="h-48 rounded-tr-2xl rounded-tl-2xl" style="background: url(<?php echo $witlandingpages_coupon_image; ?>) center / cover;"></div>
                            <div class="z-20 p-4 rounded-br-2xl rounded-bl-2xl">
                                <h3 class="text-white couponSidebarTitle"><?php echo $witlandingpages_coupon_title; ?></h3>
                                <div class="text-white couponSidebarText"><?php echo $witlandingpages_coupon_subtitle; ?></div>
                                <div class="couponSidebarPhoneNumbers">
                                    <div class="couponSidebarPhoneNumber">
                                        <span class="font-bold uppercase locationText text-green text-20">
                                            <?php if(($wlp_phone_1_location)) {
                                                echo $wlp_phone_1_location . ':';
                                            } ?> 
                                        </span>
                                        <a class="font-bold text-white uppercase text-20" href="tel:<?php echo $wlp_phone_1_href ?>"><?php echo $wlp_phone_1_display ?></a>
                                    </div> 
                                    <?php if( ($wlp_phone_2_href) && ($wlp_phone_2_display) ): ?>
                                        <div class="couponSidebarPhoneNumber">
                                        <span class="font-bold uppercase locationText text-green text-20">
                                            <?php if(($wlp_phone_2_location)) {
                                                echo $wlp_phone_2_location . ':';
                                            } ?> 
                                        </span>
                                        <a class="font-bold text-white uppercase text-20" href="tel:<?php echo $wlp_phone_2_href ?>"><?php echo $wlp_phone_2_display ?></a>
                                    </div> 
                                    <?php endif; ?>
                                </div> <!-- end .couponSidebarPhoneNumbers -->
                            </div> <!-- end .couponSidebarBottom -->
                        
                    </div>
                </div>
                <?php endif; ?>

                <div class="servicesContentSidebarSection serviceAreaSection">
                    <div class="p-5 serviceAreaSectionInner sidebarSectionInner sidebarSectionLocations bg-blue rounded-2xl">
                        <h3 class="text-center text-white couponSidebarTitle text-26 laptop:text-30"><?php echo $wlp_location_title; ?></h3>
                        <div class="flex flex-wrap items-center justify-between px-3 mt-4 mb-8 couponSidebarLocations">
                            <?php
                            if(have_rows('witlandingpages_sidebar_locations')):
                                while(have_rows('witlandingpages_sidebar_locations')):the_row(); 

                                $wlp_location_item = (get_sub_field('witlandingpages_location')) ? get_sub_field('witlandingpages_location') : '' ;
                                ?>
                                    
                                    <div class="text-base tracking-wide text-white locationItem">
                                        <!-- for custom map pin: -->
                                        <?php if( ($wlp_map_if_custom == 'customPin') && ($wlp_map_png_svg == 'pngPin') ): ?>

                                            <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter pngPin" src=<?php echo $wlp_map_png ?> /> 
                                        <?php elseif( ($wlp_map_if_custom == 'customPin') && ($wlp_map_png_svg == 'svgPin') ): ?>

                                            <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter svgPin" src=<?php echo $wlp_map_svg ?> /> 
                                        <?php else: ?>

                                        <!-- for default map pin: -->
                                        <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter" src=<?php echo $map_icon ?> />
                                        <?php endif; ?>

                                        <!-- this stays the same, regardless of above logic: -->
                                        <span class="absolute"><?php echo $wlp_location_item ?></span>
                                       
                                    </div>
                                <?php endwhile;
                            elseif(have_rows('witlandingpages_sidebar_locations', $parent)):
                                while(have_rows('witlandingpages_sidebar_locations', $parent)):the_row();
                                
                                $wlp_location_item = (get_sub_field('witlandingpages_location')) ? get_sub_field('witlandingpages_location') : '' ;
                                ?>
                                    <div class="text-white locationItem">
                                       <!-- for custom map pin: -->
                                       <?php if( ($wlp_map_if_custom == 'customPin') && ($wlp_map_png_svg == 'pngPin') ): ?>

                                            <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter pngPin" src=<?php echo $wlp_map_png ?> /> 
                                        <?php elseif( ($wlp_map_if_custom == 'customPin') && ($wlp_map_png_svg == 'svgPin') ): ?>

                                            <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter svgPin" src=<?php echo $wlp_map_svg ?> /> 
                                        <?php else: ?>

                                        <!-- for default map pin: -->
                                            <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter" src=<?php echo $map_icon ?> />
                                        <?php endif; ?>

                                       <!-- this stays the same, regardless of above logic: -->
                                       <span class="absolute"><?php echo $wlp_location_item ?></span>
                                    </div>
                                <?php endwhile;
                            endif;
                            ?>
                        </div>
                        <a class="block px-3 py-2 mx-auto my-0 text-base font-bold text-center text-white uppercase border border-white rounded-md btn moreLocations" href="<?php echo $witlandingpages_locations_url; ?>">
                        <!-- for custom map pin: -->
                        <?php if( ($wlp_map_if_custom == 'customPin') && ($wlp_map_png_svg == 'pngPin') ):  ?>

                            <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter pngPin" src=<?php echo $wlp_map_png ?> />
                        <?php elseif( ($wlp_map_if_custom == 'customPin') && ($wlp_map_png_svg == 'svgPin') ): ?>

                            <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter svgPin" src=<?php echo $wlp_map_svg ?> />
                        <?php else: ?>

                        <!-- for default map pin: -->
                            <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter" src=<?php echo $map_icon ?> />
                        <?php endif; ?>

                        <!-- this stays the same, regardless of above logic: -->
                        <?php echo $witlandingpages_locations_button; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
