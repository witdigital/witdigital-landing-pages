
<?php $current = $post->ID;
$parent = $post->post_parent; ?>
<?php $parentFields = array('witlandingpages_coupon_title', 'witlandingpages_coupon_subtitle', 'witlandingpages_coupon_image', 'witlandingpages_location', 'witlandingpages_locations_url', 'witlandingpages_locations_button');
foreach ($parentFields as $field) {
	$$field = get_field($field) ? get_field($field) : get_field($field, $parent);
}
?>
<?php 
    $wpl_coupon_title = (get_field('witlandingpages_coupon_title')) ? get_field('witlandingpages_coupon_title') : '' ;
    $wpl_coupon_subtitle = (get_field('witlandingpages_coupon_subtitle')) ? get_field('witlandingpages_coupon_subtitle') : '' ;
    $wpl_coupon_img = (get_field('witlandingpages_coupon_image')) ? get_field('witlandingpages_coupon_image')['url'] : '' ;
    $wpl_location_title = (get_field('witlandingpages_locations_title')) ? get_field('witlandingpages_locations_title') : '' ;
    $map_icon = (get_field('services_sidebar_pin_image')) ? get_field('services_sidebar_pin_image')['url'] : '/wp-content/plugins/witdigital-landing-pages/resources/assets/images/map-marker-alt-solid.svg" /';
    $wpl_locations_url = (get_field('witlandingpages_locations_url')) ? get_field('witlandingpages_locations_url') : '' ;
    $wpl_locations_btn = (get_field('witlandingpages_locations_button')) ? get_field('witlandingpages_locations_button') : '' ;
?>
<div class="servicesContent">
    <div class="flex flex-wrap justify-between px-2 mx-auto servicesContentInner max-w-1150">
        <div class="flex-grow order-2 px-2 pt-0 pb-1 servicesContentLeft laptop:flex-1 max-w-650 laptop:pt-0 laptop:px-0 laptop:pb-10 laptop:order-none">
            <?php
            if(have_rows('witlandingpages_accordion_content')):
                $i == 0;
                while(have_rows('witlandingpages_accordion_content')):the_row(); $i++; ?>
                    <div class="servicesContentItem accordionitem text-base mb-4 <?php echo $i < 2 ? 'desktopNoAccordion' : ''; ?>">
                        <h2 class="relative servicesContentTitle accordionTitle"><?php the_sub_field('witlandingpages_accordion_title') ?></h2>
                        <div class="m-2 servicesContentText accordionContent"><?php the_sub_field('witlandingpages_accordion_content') ?></div>
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
                            <div class="couponSidebarTop" style="background: url(<?php echo $wpl_coupon_img; ?>) center / cover;"></div>
                            <div class="z-20 p-4 couponSidebarBottom">
                                <h3 class="text-white couponSidebarTitle"><?php echo $wpl_coupon_title; ?></h3>
                                <div class="text-white couponSidebarText"><?php echo $wpl_coupon_subtitle; ?></div>
                                <div class="couponSidebarPhoneNumbers">
                                    <div class="couponSidebarPhoneNumber">
                                        <span class="font-bold uppercase locationText text-green text-20">
                                            <?php if(($phone_1_location)) {
                                                echo $phone_1_location . ':';
                                            } ?> 
                                        </span>
                                        <a class="font-bold text-white uppercase text-20" href="tel:<?php echo $phone_1_href ?>"><?php echo $phone_1_display ?></a>
                                    </div> 
                                    <?php if( ($phone_2_href) && ($phone_2_display) ): ?>
                                        <div class="couponSidebarPhoneNumber">
                                        <span class="font-bold uppercase locationText text-green text-20">
                                            <?php if(($phone_2_location)) {
                                                echo $phone_2_location . ':';
                                            } ?> 
                                        </span>
                                        <a class="font-bold text-white uppercase text-20" href="tel:<?php echo $phone_2_href ?>"><?php echo $phone_2_display ?></a>
                                    </div> 
                                    <?php endif; ?>
                                </div> <!-- end .couponSidebarPhoneNumbers -->
                            </div> <!-- end .couponSidebarBottom -->
                        
                    </div>
                </div>
                <div class="servicesContentSidebarSection serviceAreaSection">
                    <div class="p-5 serviceAreaSectionInner sidebarSectionInner bg-blue rounded-2xl">
                        <h3 class="text-center text-white couponSidebarTitle text-26 laptop:text-30"><?php echo $wpl_location_title; ?></h3>
                        <div class="flex flex-wrap items-center justify-between px-3 mt-4 mb-8 couponSidebarLocations">
                            <?php
                            if(have_rows('witlandingpages_sidebar_locations')):
                                while(have_rows('witlandingpages_sidebar_locations')):the_row(); ?>
                                    <div class="text-base tracking-wide text-white locationItem">
                                        <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter" src=<?php echo $map_icon ?> /> <span class="absolute"><?php the_sub_field('witlandingpages_location') ?></span>
                                       
                                    </div>
                                <?php endwhile;
                            elseif(have_rows('witlandingpages_sidebar_witlandingpages_location', $parent)):
                                while(have_rows('witlandingpages_sidebar_locations', $parent)):the_row(); ?>
                                    <div class="text-white locationItem">
                                       <img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter" src=<?php echo $map_icon ?> /> <span class="absolute"><?php the_sub_field('witlandingpages_location') ?></span>
                                    </div>
                                <?php endwhile;
                            endif;
                            ?>
                        </div>
                        <a class="block px-3 py-2 mx-auto my-0 text-base font-bold text-center text-white uppercase border border-white rounded-md btn moreLocations" href="<?php echo $wpl_locations_url; ?>"><img class="inline-block w-3 mr-1 align-text-bottom iconImageFilter" src=<?php echo $map_icon ?> /><?php echo $wpl_locations_btn; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
