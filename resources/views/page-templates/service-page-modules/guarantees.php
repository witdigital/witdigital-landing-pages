<?php

$guarantees_title = (get_field('guarantees_title')) ? get_field('guarantees_title') : '' ;
$guarantees_text = (get_field('guarantees_text')) ? get_field('guarantees_text') : '' ;
$guarantees_section_image = (get_field('guarantees_section_image')) ? get_field('guarantees_section_image')['url'] : '' ;
$guarantees_mobile_image = (get_field('guarantees_mobile_image')) ? get_field('guarantees_mobile_image')['url'] : '' ;
// Guarantee One
$g_name_one = (get_field('g_name_one')) ? get_field('g_name_one') : '' ;
$g_icon_one = (get_field('g_icon_one')) ? get_field('g_icon_one')['url'] : '' ;
$g_icon_one_alt = (get_field('g_icon_one')) ? get_field('g_icon_one')['alt'] : '' ;
$g_content_one = (get_field('g_content_one')) ? get_field('g_content_one') : '' ;
// Guarantee Two
$g_name_two = (get_field('g_name_two')) ? get_field('g_name_two') : '' ;
$g_icon_two = (get_field('g_icon_two')) ? get_field('g_icon_two')['url'] : '' ;
$g_icon_two_alt = (get_field('g_icon_two')) ? get_field('g_icon_two')['alt'] : '' ;
$g_content_two = (get_field('g_content_two')) ? get_field('g_content_two') : '' ;
// Guarantee Three
$g_name_three = (get_field('g_name_three')) ? get_field('g_name_three') : '' ;
$g_icon_three = (get_field('g_icon_three')) ? get_field('g_icon_three')['url'] : '' ;
$g_icon_three_alt = (get_field('g_icon_three')) ? get_field('g_icon_three')['alt'] : '' ;
$g_content_three = (get_field('g_content_three')) ? get_field('g_content_three') : '' ;

?>

<div class="guaranteesInner laptop:my-20">
	<div class="guaranteesLeft max-w-1440 w-full mx-auto z-10">
	<div class="guaranteesMobileImage mobileOnly" style="background: url(<?php echo $guarantees_mobile_image; ?>) center / cover;"></div>
		<div class="guaranteesLeftInner max-w-900 w-full laptop:ml-10 text-center">
			<h2 class="guaranteesTitle pt-8 laptop:pt-0"><?php echo $guarantees_title; ?></h2>
			<div class="guaranteesText mb-10 laptop:text-20"><?php echo $guarantees_text; ?></div>
			<div class="guaranteesItems laptop:flex flex-wrap justify-between laptop:mb-10">
				<div class="guaranteeItem px-4 flex-1">
					<div class="guaranteeItemInner bg-blue py-4 laptop:pt-6 laptop:pb-8 px-3 text-center rounded-xl add-box-shadow mb-4 laptop:mb-0">
						<img class="mx-auto mb-3" src="<?php echo $g_icon_one; ?>" alt="<?php echo $g_icon_one_alt; ?>" />
						<h4 class="guaranteeItemTitle text-white mb-2 laptop:mb-4"><?php echo $g_name_one; ?></h4>
						<div class="guaranteeItemText text-white">
							<?php echo $g_content_one; ?>
						</div>
					</div>
				</div>
				<div class="guaranteeItem px-4 flex-1">
					<div class="guaranteeItemInner bg-blue py-4 laptop:pt-6 laptop:pb-8 px-3 text-center rounded-xl add-box-shadow mb-4 laptop:mb-0">
						<img class="mx-auto mb-3" src="<?php echo $g_icon_two; ?>" alt="<?php echo $g_icon_two_alt; ?>" />
						<h4 class="guaranteeItemTitle text-white mb-2 laptop:mb-4"><?php echo $g_name_two; ?></h4>
						<div class="guaranteeItemText text-white">
							<?php echo $g_content_two; ?>
						</div>
					</div>
				</div>
				<div class="guaranteeItem px-4 flex-1">
					<div class="guaranteeItemInner bg-blue py-4 laptop:pt-6 laptop:pb-8 px-3 text-center rounded-xl add-box-shadow mb-4 laptop:mb-0">
						<img class="mx-auto mb-3" src="<?php echo $g_icon_three; ?>" alt="<?php echo $g_icon_three_alt; ?>" />
						<h4 class="guaranteeItemTitle text-white mb-2 laptop:mb-4"><?php echo $g_name_three; ?></h4>
						<div class="guaranteeItemText text-white">
							<?php echo $g_content_three; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-3 laptop:mb-0">


			<div class="phoneBtns">
				<div class="phoneBtnItem">
					<span class="phoneBtnItemLocation"><?php echo $phone_1_location?></span>
					<a href="tel:<?php echo $phone_1_href?>" class="phoneBtn btn bg-white rounded-md py-2 px-3 text-base font-bold"><img class="iconImage phoneBtnImage align-middle" src="<?php echo $call_button_icon?>" /> <span class=""><?php echo $phone_1_display ?></span></a>
				</div>
				<!-- Uncomment the below if a second number is used: -->
				<!-- <div class="phoneBtnItem">
					<span class="phoneBtnItemLocation"><?php echo $phone_2_location?></span>
					<a href="tel:<?php echo $phone_2_href?>" class="phoneBtn btn bg-white rounded-md py-2 px-3 text-base font-bold"><img class="iconImage phoneBtnImage align-middle" src="<?php echo $call_button_icon?>" /> <span class=""><?php echo $phone_2_display ?></span></a>
				</div> -->
			</div> <!-- end .phoneBtns -->

			</div>
		</div>
	</div>
	<div class="guaranteesRight desktopOnly" style="background: url(<?php echo $guarantees_section_image; ?>) center / cover;"></div>
</div>
