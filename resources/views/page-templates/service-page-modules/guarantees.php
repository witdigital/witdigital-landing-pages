<?php

$guarantees_title = (get_field('guarantees_title')) ? get_field('guarantees_title') : '' ;
$guarantees_text = (get_field('guarantees_text')) ? get_field('guarantees_text') : '' ;
$guarantees_section_image = (get_field('guarantees_section_image')) ? get_field('guarantees_section_image')['url'] : '' ;
// Guarantee One
$g_name_one = (get_field('g_name_one')) ? get_field('g_name_one') : '' ;
$g_icon_one = (get_field('g_icon_one')) ? get_field('g_icon_one')['url'] : '' ;
$g_content_one = (get_field('g_content_one')) ? get_field('g_content_one') : '' ;
// Guarantee Two
$g_name_two = (get_field('g_name_two')) ? get_field('g_name_two') : '' ;
$g_icon_two = (get_field('g_icon_two')) ? get_field('g_icon_two')['url'] : '' ;
$g_content_two = (get_field('g_content_two')) ? get_field('g_content_two') : '' ;
// Guarantee Three
$g_name_three = (get_field('g_name_three')) ? get_field('g_name_three') : '' ;
$g_icon_three = (get_field('g_icon_three')) ? get_field('g_icon_three')['url'] : '' ;
$g_content_three = (get_field('g_content_three')) ? get_field('g_content_three') : '' ;

?>

<div class="guaranteesInner laptop:my-20">
	<div class="guaranteesLeft maxw1440 mx-auto z-10">
		<div class="guaranteesLeftInner maxw900 laptop:ml-10 text-center">
			<h2 class="guaranteesTitle pt-8 laptop:pt-0"><?php echo $guarantees_title; ?></h2>
			<div class="guaranteesText mb-10 laptop:text-20"><?php the_field('guarantees_text'); ?></div>
			<div class="guaranteesItems laptop:flex flex-wrap justify-between laptop:mb-10">
				<?php
				$args = array(
				    'post_type' => 'witcom_guarantees',
				    'posts_per_page' => 3,
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) {
					$i = 0;
				    while ( $the_query->have_posts() ) {
						$i++;
				        $the_query->the_post(); ?>
				        <div class="guaranteeItem px-4 flex-1" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="<?php echo $i*300; ?>">
					        <div class="guaranteeItemInner bg-blue py-4 laptop:pt-6 laptop:pb-8 px-3 text-center rounded-xl add-box-shadow mb-4 laptop:mb-0">
								<img class="mx-auto mb-3" src="<?php echo get_field('witcom_guarantee_icon')['url']; ?>" alt="<?php echo get_field('witcom_guarantee_icon')['alt']; ?>" />
								<h4 class="guaranteeItemTitle text-white mb-2 laptop:mb-4"><?php the_field('witcom_guarantee_name'); ?></h4>
								<div class="guaranteeItemText text-white">
									<?php the_field('witcom_guarantee_short_description'); ?>
								</div>
							</div>
						</div>
				    <?php }
				}
				wp_reset_postdata();
				?>
			</div>
			<div class="mb-3 laptop:mb-0">
				<?php echo do_shortcode ('[phone_button_alt class=""]'); ?>
			</div>
		</div>
	</div>
	<div class="guaranteesRight desktopOnly" style="background: url(<?php echo get_field('guarantees_section_image', 'option')['url']; ?>) center / cover;"></div>
</div>
