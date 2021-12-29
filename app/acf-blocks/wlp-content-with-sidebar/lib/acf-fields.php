<?php

    /** ==========================================================================
        * Filename: acf-fields.php
        * Description: Define ACF fields used for this block
        * Reference: https://www.advancedcustomfields.com/resources/register-fields-via-php/
        * Author: @ryanemitchell
    ========================================================================== **/
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_6168ad99a7c8c',
            'title' => 'Content with Sidebar',
            'fields' => array(
                array(
                    'key' => 'field_6168ad99aba21',
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
                    'key' => 'field_6168ad99aba2a',
                    'label' => 'Instructions',
                    'name' => '',
                    'type' => 'message',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => 'This section is broken down into three individual sections: top, middle, and bottom. Each section is a standard WYSIWYG editor.',
                    'new_lines' => 'wpautop',
                    'esc_html' => 0,
                ),
                array(
                    'key' => 'field_6168ad99aba30',
                    'label' => 'Left Content (Top)',
                    'name' => 'witlandingpages_about_left_top',
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
                    'media_upload' => 1,
                    'delay' => 0,
                ),
                array(
                    'key' => 'field_6168ad99aba35',
                    'label' => 'Left Content (Middle)',
                    'name' => 'witlandingpages_about_left_middle',
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
                    'key' => 'field_6168ad99aba3b',
                    'label' => 'Left Content (Bottom)',
                    'name' => 'witlandingpages_about_left_bottom',
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
                    'key' => 'field_6168ad99aba40',
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
                    'key' => 'field_6168ad99aba45',
                    'label' => 'Sidebar Styling (optional)',
                    'name' => 'witlandingpages_about_sidebar_style',
                    'type' => 'group',
                    'instructions' => 'These fields are for the actual sidebar area.',
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
                            'key' => 'field_6168ad99b6021',
                            'label' => 'Background Color',
                            'name' => 'witlandingpages_abt_sidebar_background_color',
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
                            'enable_opacity' => 0,
                            'return_format' => 'string',
                        ),
                        array(
                            'key' => 'field_6168ad99b602b',
                            'label' => 'Border Radius',
                            'name' => 'witlandingpages_abt_sidebar_border_radius',
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
                            'key' => 'field_6168ad99b6031',
                            'label' => 'Box Shadow?',
                            'name' => 'witlandingpages_abt_sidebar_box_shadow',
                            'type' => 'true_false',
                            'instructions' => 'Toggle the box shadow on and off. Defaults to \'on\'',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'message' => '',
                            'default_value' => 1,
                            'ui' => 1,
                            'ui_on_text' => 'On',
                            'ui_off_text' => 'Off',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_6168ad99aba4b',
                    'label' => 'Right Sidebar Title',
                    'name' => 'witlandingpages_about_title',
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
                    'key' => 'field_6168ad99aba50',
                    'label' => 'Title Color (optional)',
                    'name' => 'witlandingpages_about_title_color',
                    'type' => 'color_picker',
                    'instructions' => 'Will use theme\'s default for h3 if nothing selected.',
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
                    'key' => 'field_6168ad99aba56',
                    'label' => 'Title Alignment',
                    'name' => 'witlandingpages_right_title_alignment',
                    'type' => 'radio',
                    'instructions' => 'Select the title\'s alignment:',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_6168ad99aba4b',
                                'operator' => '!=empty',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'Left' => 'Left',
                        'Center' => 'Center',
                        'Right' => 'Right',
                        'No Align' => 'No Align',
                    ),
                    'allow_null' => 0,
                    'other_choice' => 0,
                    'default_value' => '',
                    'layout' => 'horizontal',
                    'return_format' => 'value',
                    'save_other_choice' => 0,
                ),
                array(
                    'key' => 'field_6168ad99aba5b',
                    'label' => 'Right Sidebar Content',
                    'name' => 'witlandingpages_about_content',
                    'type' => 'wysiwyg',
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
                    'key' => 'field_6168ad99aba61',
                    'label' => 'Marker Color (optional)',
                    'name' => 'witlandingpages_marker_color',
                    'type' => 'color_picker',
                    'instructions' => 'Sets color for the bullet points. If nothing selected, will inherit from the active theme.',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_6168ad99aba5b',
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
                    'enable_opacity' => false,
                    'return_format' => 'string',
                ),
                array(
                    'key' => 'field_6168ad99aba66',
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
                    'key' => 'field_6168ad99aba6c',
                    'label' => 'Additional CSS',
                    'name' => 'witlandingpages_about_additional_css',
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
                        'value' => 'acf/wlp-content-with-sidebar',
                    ),
                ),
            ),
            'menu_order' => 3,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => 'Formerly \'About\'',
        ));
        
        endif;		