<?php

    /** ==========================================================================
        * Filename: acf-fields.php
        * Description: Define ACF fields used for this block
        * Reference: https://www.advancedcustomfields.com/resources/register-fields-via-php/
        * Author: @ryanemitchell
    ========================================================================== **/
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_612591b112354',
		'title' => 'Wit Acf Starter Block',
		'fields' => array(
			array(
				'key' => 'field_612595b044efd',
				'label' => 'Content',
				'name' => 'acf_starter_block_content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_612592347ffa7',
				'label' => 'Styling',
				'name' => '',
				'type' => 'accordion',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'open' => 0,
				'multi_expand' => 1,
				'endpoint' => 0,
			),
			array(
				'key' => 'field_612591cb661b9',
				'label' => 'Desktop Background Color',
				'name' => 'acf_starter_block_desktop_background_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
			),
			array(
				'key' => 'field_612591ea661ba',
				'label' => 'Mobile Background Color',
				'name' => 'acf_starter_block_mobile_background_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
			),
			array(
				'key' => 'field_61259215a8a9a',
				'label' => 'Additional SCSS',
				'name' => 'acf_starter_block_additional_scss',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/wit-acf-starter-block',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

endif;
