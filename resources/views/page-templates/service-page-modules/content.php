
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('services_sidebar_coupon_title', 'services_sidebar_coupon_subtitle', 'services_sidebar_coupon_image', 'services_sidebar_locations_title', 'services_sidebar_locations_button_text', 'services_sidebar_locations_button_url');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>
<?php 
    $section_title = (the_sub_field('section_title')) ? the_sub_field('section_title') : '' ;
    $section_content = (the_sub_field('section_content')) ? the_sub_field('section_content') : '' ;
    $location = (the_sub_field('location')) ? the_sub_field('location') : '' ;
?>
<div class="servicesContent">
    <div class="servicesContentInner max-w-1150 px-2 mx-auto flex flex-wrap justify-between">
        <div class="servicesContentLeft flex-1 max-w-650 laptop:pb-10">
            <?php
            if(have_rows('services_left_content')):
                $i == 0;
                while(have_rows('services_left_content')):the_row(); $i++; ?>
                    <div class="servicesContentItem accordionitem <?php echo $i < 2 ? 'desktopNoAccordion' : ''; ?>">
                        <h2 class="servicesContentTitle accordionTitle"><?php the_sub_field('section_title'); ?></h2>
                        <div class="servicesContentText accordionContent"><?php the_sub_field('section_content'); ?></div>
                    </div>
                <?php endwhile;
            endif;
            ?>
        </div>
        <div class="servicesContentRight max-w-400 laptop:pl-6 flex-1 laptop:pb-10">
            <div class="servicesContentRightInner sidebar mb-4">
                <div class="servicesContentSidebarSection sidebarCouponSection mb-5">
                    <div class="sidebarCouponSectionInner sidebarSectionInner text-center bg-blue rounded-2xl">
                        <div class="couponBorder absolute center-xy z-10 rounded-2xl"></div>
                        <div class="couponSidebarTop" style="background: url(<?php echo $services_sidebar_coupon_image['url']; ?>) center / cover;"></div>
                        <div class="couponSidebarBottom z-20 p-4">
                            <h3 class="couponSidebarTitle text-white"><?php echo $services_sidebar_coupon_title; ?></h3>
                            <div class="couponSidebarText text-white"><?php echo $services_sidebar_coupon_subtitle; ?></div>
                            <div class="couponSidebarPhoneNumbers">
                                <div class="couponSidebarPhoneNumber">
                                    <!-- <span class="locationText text-green rucksack text-20 font-bold uppercase"><?php echo get_field('phone_1_location', 'option'); ?>: </span> -->
                                    <a class="text-white rucksack text-20 font-bold uppercase" href="tel:<?php echo $phone_number_tel ?>"><?php echo $phone_number_display ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="servicesContentSidebarSection serviceAreaSection">
                    <div class="serviceAreaSectionInner sidebarSectionInner bg-blue rounded-2xl p-5">
                        <h3 class="couponSidebarTitle text-white text-center text-26 laptop:text-30"><?php echo $services_sidebar_locations_title; ?></h3>
                        <div class="couponSidebarLocations flex flex-wrap justify-between items-center mb-4 px-3">
                            <?php
                            if(have_rows('services_sidebar_location_items')):
                                while(have_rows('services_sidebar_location_items')):the_row(); ?>
                                    <div class="locationItem text-white">
                                       <img class="iconImage" src="/wp-content/themes/witsage10-qualityfirst/resources/assets/images/site-specific/footer_icon_pin.svg" /> <?php the_sub_field('location'); ?>
                                    </div>
                                <?php endwhile;
                            elseif(have_rows('services_sidebar_location_items', $parent)):
                                while(have_rows('services_sidebar_location_items', $parent)):the_row(); ?>
                                    <div class="locationItem text-white">
                                       <img class="iconImage" src="/wp-content/themes/witsage10-qualityfirst/resources/assets/images/site-specific/footer_icon_pin.svg" /> <?php the_sub_field('location'); ?>
                                    </div>
                                <?php endwhile;
                            endif;
                            ?>
                        </div>
                        <a class="ghostBtn btn centerBtn" href="<?php echo $services_sidebar_locations_button_url; ?>"><?php echo $services_sidebar_locations_button_text; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
