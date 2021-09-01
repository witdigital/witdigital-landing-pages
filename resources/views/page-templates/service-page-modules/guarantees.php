<div class="guaranteesInner laptop:my-20">
	<div class="guaranteesLeft maxw1440 mx-auto z-10">
		<div class="guaranteesMobileImage mobileOnky" style="background: url(<?php echo get_field('guarantees_mobile_image', 'option')['url']; ?>) center / cover;"></div>
		<div class="guaranteesLeftInner maxw900 laptop:ml-10 text-center">
			<h2 class="guaranteesTitle pt-8 laptop:pt-0"><?php the_field('guarantees_title', 'option'); ?></h2>
			<div class="guaranteesText mb-10 laptop:text-20"><?php the_field('guarantees_text', 'option'); ?></div>
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
