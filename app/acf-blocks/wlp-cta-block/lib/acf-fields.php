<?php

    /** ==========================================================================
        * Filename: acf-fields.php
        * Description: Define ACF fields used for this block
        * Reference: https://www.advancedcustomfields.com/resources/register-fields-via-php/
        * Author: @ryanemitchell
    ========================================================================== **/
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_6168ae146be7a',
            'title' => 'CTA Block',
            'fields' => array(
                array(
                    'key' => 'field_6168ae147012e',
                    'label' => 'Is the background a color or a gradient?',
                    'name' => 'witlandingpages_cta_background',
                    'type' => 'radio',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
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
                    'layout' => 'horizontal',
                    'return_format' => 'value',
                    'save_other_choice' => 0,
                ),
                array(
                    'key' => 'field_6168ae1470158',
                    'label' => 'Background Color',
                    'name' => 'witlandingpages_cta_background_color',
                    'type' => 'color_picker',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_6168ae147012e',
                                'operator' => '==',
                                'value' => 'Color',
                            ),
                        ),
                    ),
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
                    'key' => 'field_6168ae1470171',
                    'label' => 'Background Gradient',
                    'name' => 'witlandingpages_cta_background_gradient',
                    'type' => 'text',
                    'instructions' => 'Enter the entire string, except for the semicolon. Ex: \'linear-gradient(-108deg, rgba(0, 41, 93, .84) 0%, rgba(0, 174, 239, .84) 100%);\'',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_6168ae147012e',
                                'operator' => '==',
                                'value' => 'Gradient',
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
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_6168ae1470177',
                    'label' => 'Image',
                    'name' => 'witlandingpages_cta_image',
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
                    'key' => 'field_6168ae147018a',
                    'label' => 'Title',
                    'name' => 'witlandingpages_cta_title',
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
                    'key' => 'field_6168ae147018f',
                    'label' => 'Content',
                    'name' => 'witlandingpages_cta_content',
                    'type' => 'wysiwyg',
                    'instructions' => 'Do not add phone number buttons. They will come in via the below shortcode.',
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
                    'key' => 'field_6168ae1470195',
                    'label' => 'Buttons Shortcode',
                    'name' => 'witlandingpages_cta_shortcode',
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
                    'key' => 'field_6168ae147019a',
                    'label' => 'Additional CSS',
                    'name' => 'witlandingpages_cta_additional_css',
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
                        'value' => 'acf/wlp-cta-block',
                    ),
                ),
            ),
            'menu_order' => 4,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        endif;		
