<?php

    /** ==========================================================================
        * Filename: acf-fields.php
        * Description: Define ACF fields used for this block
        * Reference: https://www.advancedcustomfields.com/resources/register-fields-via-php/
        * Author: @ryanemitchell
    ========================================================================== **/

    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_6168acec797fa',
            'title' => 'Intro Section',
            'fields' => array(
                array(
                    'key' => 'field_6168acec7e211',
                    'label' => 'Use image or video embed?',
                    'name' => 'witlandingpages_image_video',
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
                        'Image' => 'Image',
                        'Embed' => 'Embed',
                    ),
                    'allow_null' => 0,
                    'other_choice' => 0,
                    'default_value' => 'Image',
                    'layout' => 'vertical',
                    'return_format' => 'value',
                    'save_other_choice' => 0,
                ),
                array(
                    'key' => 'field_6168acec7e22e',
                    'label' => 'Intro Image',
                    'name' => 'witlandingpages_intro_image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_6168acec7e211',
                                'operator' => '==',
                                'value' => 'Image',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '50',
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
                    'key' => 'field_6168acec7e237',
                    'label' => 'Border Radius (Optional)',
                    'name' => 'witlandingpages_intro_border_rad',
                    'type' => 'number',
                    'instructions' => 'Value in rem. Use <a href="https://nekocalc.com/px-to-rem-converter" target="_blank">this tool</a> to convert from pixels.',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_6168acec7e22e',
                                'operator' => '!=empty',
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
                    'append' => 'rem',
                    'min' => '',
                    'max' => '',
                    'step' => 1,
                ),
                array(
                    'key' => 'field_6168acec7e23f',
                    'label' => 'Intro Embed',
                    'name' => 'witlandingpages_intro_embed',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_6168acec7e211',
                                'operator' => '==',
                                'value' => 'Embed',
                            ),
                        ),
                    ),
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
                    'key' => 'field_6168acec7e245',
                    'label' => 'Intro Title',
                    'name' => 'witlandingpages_intro_title',
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
                    'key' => 'field_6168acec7e24a',
                    'label' => 'Title Color (optional)',
                    'name' => 'witlandingpages_intro_title_color',
                    'type' => 'color_picker',
                    'instructions' => 'Will default to theme color for h2 if nothing selected.',
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
                    'key' => 'field_6168acec7e251',
                    'label' => 'Intro Text',
                    'name' => 'witlandingpages_intro_text',
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
                    'key' => 'field_6168acec7e257',
                    'label' => 'Buttons Shortcode',
                    'name' => 'witlandingpages_intro_shortcode',
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
                    'key' => 'field_6168acec7e25e',
                    'label' => 'Additional CSS',
                    'name' => 'witlandingpages_intro_additional_css',
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
                        'value' => 'acf/wlp-intro-block',
                    ),
                ),
            ),
            'menu_order' => 2,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        endif;		
