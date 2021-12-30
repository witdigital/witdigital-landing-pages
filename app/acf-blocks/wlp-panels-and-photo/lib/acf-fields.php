<?php

    /** ==========================================================================
        * Filename: acf-fields.php
        * Description: Define ACF fields used for this block
        * Reference: https://www.advancedcustomfields.com/resources/register-fields-via-php/
        * Author: @ryanemitchell
    ========================================================================== **/
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_6168ae5f1f861',
            'title' => 'Three Panels with Photo',
            'fields' => array(
                array(
                    'key' => 'field_6168ae5f23574',
                    'label' => 'Left Side',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_6168ae5f2357c',
                    'label' => 'Section Header',
                    'name' => 'witlandingpages_panel_section_main',
                    'type' => 'wysiwyg',
                    'instructions' => 'Color can be controlled by expanding the toolbar. Color will default to theme settings for your chosen header element.',
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
                    'media_upload' => 0,
                    'delay' => 0,
                ),
                array(
                    'key' => 'field_6168ae5f23583',
                    'label' => 'Buttons Shortcode',
                    'name' => 'witlandingpages_panels_shortcode',
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
                    'key' => 'field_6168ae5f23588',
                    'label' => 'Panel Styling (optional)',
                    'name' => 'witlandingpages_panel_styles',
                    'type' => 'group',
                    'instructions' => 'These fields control styling for the panels themselves.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_6168ae5f29246',
                            'label' => 'Background Color',
                            'name' => 'witlandingpages_panel_background_color',
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
                            'enable_opacity' => false,
                            'return_format' => 'string',
                        ),
                        array(
                            'key' => 'field_6168ae5f2924e',
                            'label' => 'Border Radius',
                            'name' => 'witlandingpages_panel_border_radius',
                            'type' => 'number',
                            'instructions' => 'Value in rems. Use <a href="https://nekocalc.com/px-to-rem-converter" target="_blank">this tool</a> to convert from px to rem.',
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
                            'append' => 'rem',
                            'min' => '',
                            'max' => '',
                            'step' => 1,
                        ),
                        array(
                            'key' => 'field_6168ae5f29254',
                            'label' => 'Title Color',
                            'name' => 'witlandingpages_panel_title_color',
                            'type' => 'color_picker',
                            'instructions' => 'Will default to theme color for h4 if nothing is selected.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'enable_opacity' => 0,
                            'return_format' => 'string',
                        ),
                        array(
                            'key' => 'field_6168ae5f29259',
                            'label' => 'Body Color',
                            'name' => 'witlandingpages_panel_body_color',
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
                            'enable_opacity' => false,
                            'return_format' => 'string',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_6168ae5f2358f',
                    'label' => 'Panels',
                    'name' => 'witlandingpages_panels',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 3,
                    'max' => 3,
                    'layout' => 'table',
                    'button_label' => '',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_6168ae5f32733',
                            'label' => 'Image',
                            'name' => 'witlandingpages_p_image',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'url',
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
                            'key' => 'field_6168ae5f3273e',
                            'label' => 'Title',
                            'name' => 'witlandingpages_p_title',
                            'type' => 'text',
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
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_6168ae5f32746',
                            'label' => 'Text',
                            'name' => 'witlandingpages_p_text',
                            'type' => 'text',
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
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_6168ae5f23595',
                    'label' => 'Right Side',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_6168ae5f2359b',
                    'label' => 'Desktop Image',
                    'name' => 'witlandingpages_p_desk',
                    'type' => 'image',
                    'instructions' => '',
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
                    'key' => 'field_6168ae5f235a0',
                    'label' => 'Border Radius (optional)',
                    'name' => 'witlandingpages_pdesk_border_radius',
                    'type' => 'number',
                    'instructions' => 'Value in rems. Use <a href="https://nekocalc.com/px-to-rem-converter" target="_blank">this tool</a> to convert from px to rem.
        NOTE: this only affects the desktop image.',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_6168ae5f2359b',
                                'operator' => '!=empty',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => 'rem',
                    'min' => '',
                    'max' => '',
                    'step' => 1,
                ),
                array(
                    'key' => 'field_6168ae5f235a7',
                    'label' => 'Mobile Image',
                    'name' => 'witlandingpages_p_mobile',
                    'type' => 'image',
                    'instructions' => 'OPTIONAL. If no image is provided, Desktop Image will be used.',
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
                    'key' => 'field_6168ae5f235ac',
                    'label' => 'Additional CSS',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_6168ae5f235b1',
                    'label' => 'Additional CSS',
                    'name' => 'witlandingpages_panels_additional_css',
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
                        'value' => 'acf/wlp-panels-and-photo',
                    ),
                ),
            ),
            'menu_order' => 5,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => 'Formerly \'Guarantees\'',
        ));
        
        endif;		