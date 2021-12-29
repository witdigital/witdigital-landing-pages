<?php

    /** ==========================================================================
        * Filename: acf-fields.php
        * Description: Define ACF fields used for this block
        * Reference: https://www.advancedcustomfields.com/resources/register-fields-via-php/
        * Author: @ryanemitchell
    ========================================================================== **/

    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_61cb8bf7d54b7',
            'title' => 'Hero Block',
            'fields' => array(
                array(
                    'key' => 'field_61cb8bf7d8145',
                    'label' => 'Hero Background Image',
                    'name' => 'witlandingpages_hero_image',
                    'type' => 'image',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array(
                    'key' => 'field_61cb8bf7d814b',
                    'label' => 'Is the overlay a color or a gradient?',
                    'name' => 'witlandingpages_overlay',
                    'type' => 'radio',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_61cb8bf7d8145',
                                'operator' => '!=empty',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'Color' => 'Color',
                        'Gradient' => 'Gradient',
                    ),
                    'allow_null' => 0,
                    'other_choice' => 0,
                    'default_value' => '',
                    'layout' => 'vertical',
                    'return_format' => 'value',
                    'save_other_choice' => 0,
                ),
                array(
                    'key' => 'field_61cb8bf7d8151',
                    'label' => 'Overlay Color',
                    'name' => 'witlandingpages_overlay_color',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_61cb8bf7d814b',
                                'operator' => '==',
                                'value' => 'Color',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'enable_opacity' => 1,
                    'return_format' => 'string',
                ),
                array(
                    'key' => 'field_61cb8bf7d8157',
                    'label' => 'Overlay Gradient',
                    'name' => 'witlandingpages_overlay_gradient',
                    'type' => 'text',
                    'instructions' => 'Enter the entire string, except for the semicolon. Ex: \'linear-gradient(-108deg, rgba(0, 41, 93, .84) 0%, rgba(0, 174, 239, .84) 100%)\'',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_61cb8bf7d814b',
                                'operator' => '==',
                                'value' => 'Gradient',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_61cb8bf7d815d',
                    'label' => 'Hero Title',
                    'name' => 'witlandingpages_hero_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_61cb8bf7d8162',
                    'label' => 'Title Color (optional)',
                    'name' => 'witlandingpages_hero_title_color',
                    'type' => 'color_picker',
                    'instructions' => 'Will default to theme color for the site\'s hero if nothing selected.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'enable_opacity' => 0,
                    'return_format' => 'string',
                ),
                array(
                    'key' => 'field_61cb8bf7d8168',
                    'label' => 'Hero Subtitle',
                    'name' => 'witlandingpages_hero_subtitle',
                    'type' => 'text',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_61cb8bf7d816d',
                    'label' => 'Title Color (optional)',
                    'name' => 'witlandingpages_hero_subtitle_color',
                    'type' => 'color_picker',
                    'instructions' => 'Will default to theme color for span if nothing selected.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'enable_opacity' => 0,
                    'return_format' => 'string',
                ),
                array(
                    'key' => 'field_61cb8bf7d8173',
                    'label' => 'Buttons Shortcode',
                    'name' => 'witlandingpages_hero_shortcode',
                    'type' => 'text',
                    'instructions' => 'Input shortcode here, be sure to include the brackets.
                        <br>
                        <strong>Single Phone Number:</strong> <em>[witlandingpages_one_phone]</em>
                        <br>
                        <strong>Two Phone Numbers:</strong> <em>[witlandingpages_two_phones]</em>
                        <br>
                        <strong>Request Service:</strong> <em>[witlandingpages_schedule_btn]</em>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_61cb8bf7d8178',
                    'label' => 'Additional CSS',
                    'name' => 'witlandingpages_hero_additional_css',
                    'type' => 'textarea',
                    'instructions' => 'Use this area for any additional CSS. Be sure to use proper formatting; reach out to Dev with any questions.',
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
                        'value' => 'acf/wlp-hero-block',
                    ),
                ),
            ),
            'menu_order' => 1,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        endif;		
