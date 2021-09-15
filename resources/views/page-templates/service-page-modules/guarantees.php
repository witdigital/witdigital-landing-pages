<?php

$guarantees_title = (get_field('witlandingpages_panel_section_title')) ? get_field('witlandingpages_panel_section_title') : '' ;
$guarantees_text = (get_field('witlandingpages_panel_section_text')) ? get_field('witlandingpages_panel_section_text') : '' ;
$guarantees_section_image = (get_field('witlandingpages_p_desk')) ? get_field('witlandingpages_p_desk')['url'] : '' ;
// if no mobile image selected, use desktop:
$guarantees_mobile_image = (get_field('witlandingpages_p_mobile')) ? get_field('witlandingpages_p_mobile')['url'] : get_field('witlandingpages_p_desk')['url'] ;


?>

<div class="guaranteesInner laptop:my-20">
	<div class="z-10 w-full mx-auto guaranteesLeft max-w-1440">
	<div class="guaranteesMobileImage mobileOnly" style="background: url(<?php echo $guarantees_mobile_image; ?>) center / cover;"></div>
		<div class="w-full text-center guaranteesLeftInner max-w-900 laptop:ml-10">
			<h2 class="pt-8 guaranteesTitle laptop:pt-0"><?php echo $guarantees_title; ?></h2>
			<div class="mb-10 guaranteesText laptop:text-20"><?php echo $guarantees_text; ?></div>
			<div class="flex-wrap justify-between guaranteesItems laptop:flex laptop:mb-10">
				<?php if( have_rows('witlandingpages_panels') ):
						while( have_rows('witlandingpages_panels') ): the_row(); 
						?>

							<div class="flex-1 px-4 guaranteeItem">

								<div class="px-3 py-4 mb-4 text-center guaranteeItemInner bg-blue laptop:pt-6 laptop:pb-8 rounded-xl add-box-shadow laptop:mb-0">
									<img class="mx-auto mb-3" src="<?php the_sub_field('witlandingpages_p_image')?>" />
									<h4 class="mb-2 text-white guaranteeItemTitle laptop:mb-4"><?php the_sub_field('witlandingpages_p_title'); ?></h4>
									<div class="text-white guaranteeItemText"><?php the_sub_field('witlandingpages_p_text'); ?></div>
								</div>

							</div>
						<?php endwhile; 

					endif;
				?>
			</div>
			<div class="mb-3 laptop:mb-0">


			<div class="flex items-center justify-between mx-auto my-0 phoneBtns flex-nowrap max-w-340">
				<div class="phoneBtnItem mb-2.5">
					<span class="phoneBtnItemLocation block mb-1.5 font-bold"><?php echo $phone_1_location?></span>
					<a href="tel:<?php echo $phone_1_href?>" class="px-3 py-2 text-base font-bold bg-white rounded-md phoneBtn btn"><img class="align-middle iconImage phoneBtnImage w-3.5" src="<?php echo $call_button_icon?>" /> <span class=""><?php echo $phone_1_display ?></span></a>
				</div>

				<?php if( ($phone_2_href) && ($phone_2_display) ): ?>
				<div class="phoneBtnItem mb-2.5">
					<span class="phoneBtnItemLocation block mb-1.5 font-bold"><?php echo $phone_2_location?></span>
					<a href="tel:<?php echo $phone_2_href?>" class="px-3 py-2 text-base font-bold bg-white rounded-md phoneBtn btn"><img class="align-middle iconImage phoneBtnImage w-3.5" src="<?php echo $call_button_icon?>" /> <span class=""><?php echo $phone_2_display ?></span></a>
				</div>
				<?php endif; ?>

			</div> <!-- end .phoneBtns -->

			</div>
		</div>
	</div>
	<div class="guaranteesRight desktopOnly -z-10" style="background: url(<?php echo $guarantees_section_image; ?>) center / cover;"></div>
</div>
