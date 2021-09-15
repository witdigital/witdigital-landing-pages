
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('services_sidebar_coupon_title', 'services_sidebar_coupon_subtitle', 'services_sidebar_coupon_image', 'services_sidebar_locations_title', 'services_sidebar_locations_button_text', 'services_sidebar_locations_button_url');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>
<?php 
    // $section_title = (the_sub_field('section_title')) ? the_sub_field('section_title') : '' ;
    // $section_content = (the_sub_field('section_content')) ? the_sub_field('section_content') : '' ;
    // $map_icon = '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/map-marker-alt-solid.svg" /';
    $map_icon = (get_field('services_sidebar_pin_image')) ? get_field('services_sidebar_pin_image')['url'] : '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/map-marker-alt-solid.svg" /';
?>
<div class="servicesContent">
    <div class="flex flex-wrap justify-between px-2 mx-auto servicesContentInner max-w-1150">
        <div class="flex-grow order-2 px-2 pt-0 pb-1 servicesContentLeft laptop:flex-1 max-w-650 laptop:pt-0 laptop:px-0 laptop:pb-10 laptop:order-none">
            <?php
            if(have_rows('services_left_content')):
                $i == 0;
                while(have_rows('services_left_content')):the_row(); $i++; ?>
                    <div class="servicesContentItem accordionitem text-base mb-4 <?php echo $i < 2 ? 'desktopNoAccordion' : ''; ?>">
                        <h2 class="relative servicesContentTitle accordionTitle"><?php the_sub_field('section_title') ?></h2>
                        <div class="m-2 servicesContentText accordionContent"><?php the_sub_field('section_content') ?></div>
                    </div>
                <?php endwhile;
            endif;
            ?>
        </div>
        <div class="flex-1 order-1 px-0 py-2 mt-5 servicesContentRight laptop:-right-8 max-w-400 laptop:pl-6 laptop:pb-10 laptop:order-none laptop:mt-auto">
            <div class="mb-4 servicesContentRightInner sidebar">
                <div class="mb-5 servicesContentSidebarSection sidebarCouponSection">
                    <div class="text-center sidebarCouponSectionInner sidebarSectionInner bg-blue rounded-2xl">
                        <div class="absolute z-10 couponBorder rounded-2xl"></div>
                            <div class="couponSidebarTop" style="background: url(<?php echo $services_sidebar_coupon_image['url']; ?>) center / cover;"></div>
                            <div class="z-20 p-4 couponSidebarBottom">
                                <h3 class="text-white couponSidebarTitle"><?php echo $services_sidebar_coupon_title; ?></h3>
                                <div class="text-white couponSidebarText"><?php echo $services_sidebar_coupon_subtitle; ?></div>
                                <div class="couponSidebarPhoneNumbers">
                                    <div class="couponSidebarPhoneNumber">
                                        <!-- <span class="font-bold uppercase locationText text-green rucksack text-20"><?php echo get_field('phone_1_location', 'option'); ?>: </span> -->
                                        <a class="font-bold text-white uppercase rucksack text-20" href="tel:<?php echo $phone_1_href ?>"><?php echo $phone_1_display ?></a>
                                    </div>
                                </div>
                            </div> <!-- end .couponSidebarBottom -->
                        
                    </div>
                </div>
                <div class="servicesContentSidebarSection serviceAreaSection">
                    <div class="p-5 serviceAreaSectionInner sidebarSectionInner bg-blue rounded-2xl">
                        <h3 class="text-center text-white couponSidebarTitle text-26 laptop:text-30"><?php echo $services_sidebar_locations_title; ?></h3>
                        <div class="flex flex-wrap items-center justify-between px-3 mb-4 couponSidebarLocations">
                            <?php
                            if(have_rows('services_sidebar_location_items')):
                                while(have_rows('services_sidebar_location_items')):the_row(); ?>
                                    <div class="text-base tracking-wide text-white locationItem">
                                       <img class="iconImage" src=<?php echo $map_icon ?> /> <?php the_sub_field('location') ?>
                                    </div>
                                <?php endwhile;
                            elseif(have_rows('services_sidebar_location_items', $parent)):
                                while(have_rows('services_sidebar_location_items', $parent)):the_row(); ?>
                                    <div class="text-white locationItem">
                                       <img class="iconImage" src=<?php echo $map_icon ?> /> <?php the_sub_field('location') ?>
                                    </div>
                                <?php endwhile;
                            endif;
                            ?>
                        </div>
                        <a class="block px-3 py-2 mx-auto my-0 text-base font-bold text-center text-white uppercase border border-white rounded-md btn moreLocations" href="<?php echo $services_sidebar_locations_button_url; ?>"><img class="iconImage" src=<?php echo $map_icon ?> /><?php echo $services_sidebar_locations_button_text; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
