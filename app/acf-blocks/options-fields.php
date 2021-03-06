<?php
/****
        * Filename: options-fields.php
        * Description: Define ACF fields used for global button settings
        * Reference: https://www.advancedcustomfields.com/resources/register-fields-via-php/
        * Author: @edawson1980
****/
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_614102a41794f',
        'title' => 'Landing Page Button Settings',
        'fields' => array(
            array(
                'key' => 'field_6154a29ff2da3',
                'label' => 'Phone Button Styling (Optional)',
                'name' => 'witlandingpages_phone_styling',
                'type' => 'group',
                'instructions' => 'This styling applies to all the phone buttons on this page.',
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
                        'key' => 'field_6154a29ff2da4',
                        'label' => 'Background Color',
                        'name' => 'witlandingpages_phone_background_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
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
                        'key' => 'field_6154b804a7e96',
                        'label' => 'Background Color (Hover)',
                        'name' => 'witlandingpages_phone_background_color_hover',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
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
                        'key' => 'field_6154a29ff2da5',
                        'label' => 'Border Radius',
                        'name' => 'witlandingpages_phone_border_radius',
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
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_6154a29ff2da6',
                        'label' => 'Location Color',
                        'name' => 'witlandingpages_phone_location_color',
                        'type' => 'color_picker',
                        'instructions' => 'Styles the location names when using two phone numbers.',
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
                        'key' => 'field_6154a29ff2da7',
                        'label' => 'Color',
                        'name' => 'witlandingpages_phone_body_color',
                        'type' => 'color_picker',
                        'instructions' => 'Controls the color for the phone number.',
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
                        'key' => 'field_6154a29ff2da8',
                        'label' => 'Color (Hover)',
                        'name' => 'witlandingpages_phone_body_color_hover',
                        'type' => 'color_picker',
                        'instructions' => 'Controls the color for the phone number on hover.',
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
                        'key' => 'field_6154a29ff2da9',
                        'label' => 'Custom Icon?',
                        'name' => 'witlandingpages_phone_custom_icon',
                        'type' => 'true_false',
                        'instructions' => 'Will you be uploading a custom phone icon?',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_6154a29ff2daa',
                        'label' => 'Icon Filter',
                        'name' => 'witlandingpages_phone_default_icon_filter',
                        'type' => 'text',
                        'instructions' => 'Generate filter <a href="https://codepen.io/sosuke/pen/Pjoqqp" target="_blank">here</a>. 
    <br>
    <strong>IMPORTANT:</strong> do not include \'filter:\', just what comes after it (including the semi-colon). 
    <br>
    Ex: invert(42%) sepia(94%) saturate(738%) hue-rotate(156deg) brightness(98%) contrast(101%);
    <br>
    Please reach out to Dev if you are unsure about how to use this tool.',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6154a29ff2da9',
                                    'operator' => '!=',
                                    'value' => '1',
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
                        'key' => 'field_6154b82ea7e97',
                        'label' => 'Icon Filter (Hover)',
                        'name' => 'witlandingpages_phone_default_filter_hover',
                        'type' => 'text',
                        'instructions' => 'Generate filter <a href="https://codepen.io/sosuke/pen/Pjoqqp" target="_blank">here</a>. 
    <br>
    <strong>IMPORTANT:</strong> do not include \'filter:\', just what comes after it (including the semi-colon). 
    <br>
    Ex: invert(42%) sepia(94%) saturate(738%) hue-rotate(156deg) brightness(98%) contrast(101%);
    <br>
    Please reach out to Dev if you are unsure about how to use this tool.',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6154a29ff2da9',
                                    'operator' => '!=',
                                    'value' => '1',
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
                        'key' => 'field_6154a29ff2dab',
                        'label' => 'Is icon a PNG or SVG?',
                        'name' => 'witlandingpages_phone_png_svg',
                        'type' => 'radio',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6154a29ff2da9',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'PNG' => 'PNG',
                            'SVG' => 'SVG',
                        ),
                        'allow_null' => 0,
                        'other_choice' => 0,
                        'save_other_choice' => 0,
                        'default_value' => '',
                        'layout' => 'horizontal',
                        'return_format' => 'value',
                    ),
                    array(
                        'key' => 'field_6154a29ff2dac',
                        'label' => 'Phone Icon',
                        'name' => 'witlandingpages_phone_png',
                        'type' => 'image',
                        'instructions' => 'Upload your phone icon here',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6154a29ff2dab',
                                    'operator' => '==',
                                    'value' => 'PNG',
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
                        'mime_types' => 'png',
                    ),
                    array(
                        'key' => 'field_6154a29ff2dad',
                        'label' => 'Phone Icon (Hover)',
                        'name' => 'witlandingpages_phone_png_hover',
                        'type' => 'image',
                        'instructions' => 'Upload your phone icon(hover) here',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6154a29ff2dab',
                                    'operator' => '==',
                                    'value' => 'PNG',
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
                        'mime_types' => 'png',
                    ),
                    array(
                        'key' => 'field_6154a29ff2dae',
                        'label' => 'Icon Filter',
                        'name' => 'witlandingpages_phone_custom_icon_filter',
                        'type' => 'text',
                        'instructions' => '<strong>NOTE:</strong> if a filter value already exists for the default icon, and no value is used here, that previous filter will apply here. TL;DR: if this filter doesn\'t work as expected, check to see if anything is in the other Icon Filter field.
    <br>
    Generate filter <a href="https://codepen.io/sosuke/pen/Pjoqqp" target="_blank">here</a>. 
    <br>
    <strong>IMPORTANT:</strong> do not include \'filter:\', just what comes after it (including the semi-colon). 
    <br>
    Ex: invert(42%) sepia(94%) saturate(738%) hue-rotate(156deg) brightness(98%) contrast(101%);
    <br>
    Please reach out to Dev if you are unsure about how to use this tool.',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6154a29ff2dab',
                                    'operator' => '==',
                                    'value' => 'SVG',
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
                        'key' => 'field_6154a29ff2daf',
                        'label' => 'Icon Filter (Hover)',
                        'name' => 'witlandingpages_phone_custom_icon_filter_hover',
                        'type' => 'text',
                        'instructions' => '<strong>NOTE:</strong> if a filter value already exists for the default icon, and no value is used here, that previous filter will apply here. TL;DR: if this filter doesn\'t work as expected, check to see if anything is in the other Icon Filter field.
    <br>
    Generate filter <a href="https://codepen.io/sosuke/pen/Pjoqqp" target="_blank">here</a>. 
    <br>
    <strong>IMPORTANT:</strong> do not include \'filter:\', just what comes after it (including the semi-colon). 
    <br>
    Ex: invert(42%) sepia(94%) saturate(738%) hue-rotate(156deg) brightness(98%) contrast(101%);
    <br>
    Please reach out to Dev if you are unsure about how to use this tool.',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6154a29ff2dab',
                                    'operator' => '==',
                                    'value' => 'SVG',
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
                        'key' => 'field_6154a29ff2db0',
                        'label' => 'Phone Icon',
                        'name' => 'witlandingpages_phone_svg',
                        'type' => 'image',
                        'instructions' => 'Upload your phone icon here',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6154a29ff2dab',
                                    'operator' => '==',
                                    'value' => 'SVG',
                                ),
                            ),
                        ),
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
                        'mime_types' => 'svg',
                    ),
                    array(
                        'key' => 'field_615f4fd05c196',
                        'label' => 'Additional CSS',
                        'name' => 'witlandingpages_phone_btn_additional_css',
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
            ),
            array(
                'key' => 'field_61522ef898105',
                'label' => 'Request Button Styling (Optional)',
                'name' => 'witlandingpages_request_styling',
                'type' => 'group',
                'instructions' => 'This styling applies to all the Request Service buttons on this page.',
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
                        'key' => 'field_61522ef898106',
                        'label' => 'Background Color',
                        'name' => 'witlandingpages_req_background_color',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
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
                        'key' => 'field_6154b85ba7e98',
                        'label' => 'Background Color (Hover)',
                        'name' => 'witlandingpages_req_background_color_hover',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
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
                        'key' => 'field_61522ef898107',
                        'label' => 'Border Radius',
                        'name' => 'witlandingpages_req_border_radius',
                        'type' => 'number',
                        'instructions' => 'Value in rems. Use <a href="https://nekocalc.com/px-to-rem-converter" target="_blank">this tool</a> to convert from px to rem.',
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
                        'append' => 'rem',
                        'min' => '',
                        'max' => '',
                        'step' => 1,
                    ),
                    array(
                        'key' => 'field_61522ef898109',
                        'label' => 'Color',
                        'name' => 'witlandingpages_req_body_color',
                        'type' => 'color_picker',
                        'instructions' => 'Controls the color for the button text.',
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
                        'key' => 'field_61522ef89810a',
                        'label' => 'Color (Hover)',
                        'name' => 'witlandingpages_req_body_color_hover',
                        'type' => 'color_picker',
                        'instructions' => 'Controls the color for the button text on hover.',
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
                        'key' => 'field_61522ef89810b',
                        'label' => 'Custom Icon?',
                        'name' => 'witlandingpages_req_custom_icon',
                        'type' => 'true_false',
                        'instructions' => 'Will you be uploading a custom icon?',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_61522ef89810c',
                        'label' => 'Icon Filter',
                        'name' => 'witlandingpages_req_default_icon_filter',
                        'type' => 'text',
                        'instructions' => 'Generate filter <a href="https://codepen.io/sosuke/pen/Pjoqqp" target="_blank">here</a>. 
    <br>
    <strong>IMPORTANT:</strong> do not include \'filter:\', just what comes after it (including the semi-colon). 
    <br>
    Ex: invert(42%) sepia(94%) saturate(738%) hue-rotate(156deg) brightness(98%) contrast(101%);
    <br>
    Please reach out to Dev if you are unsure about how to use this tool.',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_61522ef89810b',
                                    'operator' => '!=',
                                    'value' => '1',
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
                        'key' => 'field_6154b869a7e99',
                        'label' => 'Icon Filter (Hover)',
                        'name' => 'witlandingpages_req_default_filter_hover',
                        'type' => 'text',
                        'instructions' => 'Generate filter <a href="https://codepen.io/sosuke/pen/Pjoqqp" target="_blank">here</a>. 
    <br>
    <strong>IMPORTANT:</strong> do not include \'filter:\', just what comes after it (including the semi-colon). 
    <br>
    Ex: invert(42%) sepia(94%) saturate(738%) hue-rotate(156deg) brightness(98%) contrast(101%);
    <br>
    Please reach out to Dev if you are unsure about how to use this tool.',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_61522ef89810b',
                                    'operator' => '!=',
                                    'value' => '1',
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
                        'key' => 'field_61522ef89810d',
                        'label' => 'Is icon a PNG or SVG?',
                        'name' => 'witlandingpages_req_png_svg',
                        'type' => 'radio',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_61522ef89810b',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'PNG' => 'PNG',
                            'SVG' => 'SVG',
                        ),
                        'allow_null' => 0,
                        'other_choice' => 0,
                        'default_value' => '',
                        'layout' => 'horizontal',
                        'return_format' => 'value',
                        'save_other_choice' => 0,
                    ),
                    array(
                        'key' => 'field_61522ef89810e',
                        'label' => 'Icon',
                        'name' => 'witlandingpages_req_png',
                        'type' => 'image',
                        'instructions' => 'Upload your icon here',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_61522ef89810d',
                                    'operator' => '==',
                                    'value' => 'PNG',
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
                        'mime_types' => 'png',
                    ),
                    array(
                        'key' => 'field_61522ef89810f',
                        'label' => 'Icon (Hover)',
                        'name' => 'witlandingpages_req_png_hover',
                        'type' => 'image',
                        'instructions' => 'Upload your icon(hover) here',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_61522ef89810d',
                                    'operator' => '==',
                                    'value' => 'PNG',
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
                        'mime_types' => 'png',
                    ),
                    array(
                        'key' => 'field_61522ef898110',
                        'label' => 'Icon Filter',
                        'name' => 'witlandingpages_req_custom_icon_filter',
                        'type' => 'text',
                        'instructions' => '<strong>NOTE:</strong> if a filter value already exists for the default icon, and no value is used here, that previous filter will apply here. TL;DR: if this filter doesn\'t work as expected, check to see if anything is in the other Icon Filter field.
    <br>
    Generate filter <a href="https://codepen.io/sosuke/pen/Pjoqqp" target="_blank">here</a>. 
    <br>
    <strong>IMPORTANT:</strong> do not include \'filter:\', just what comes after it (including the semi-colon). 
    <br>
    Ex: invert(42%) sepia(94%) saturate(738%) hue-rotate(156deg) brightness(98%) contrast(101%);
    <br>
    Please reach out to Dev if you are unsure about how to use this tool.',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_61522ef89810d',
                                    'operator' => '==',
                                    'value' => 'SVG',
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
                        'key' => 'field_61522ef898111',
                        'label' => 'Icon Filter (Hover)',
                        'name' => 'witlandingpages_req_custom_icon_filter_hover',
                        'type' => 'text',
                        'instructions' => '<strong>NOTE:</strong> if a filter value already exists for the default icon, and no value is used here, that previous filter will apply here. TL;DR: if this filter doesn\'t work as expected, check to see if anything is in the other Icon Filter field.
    <br>
    Generate filter <a href="https://codepen.io/sosuke/pen/Pjoqqp" target="_blank">here</a>. 
    <br>
    <strong>IMPORTANT:</strong> do not include \'filter:\', just what comes after it (including the semi-colon). 
    <br>
    Ex: invert(42%) sepia(94%) saturate(738%) hue-rotate(156deg) brightness(98%) contrast(101%);
    <br>
    Please reach out to Dev if you are unsure about how to use this tool.',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_61522ef89810d',
                                    'operator' => '==',
                                    'value' => 'SVG',
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
                        'key' => 'field_61522ef898112',
                        'label' => 'Icon',
                        'name' => 'witlandingpages_req_svg',
                        'type' => 'image',
                        'instructions' => 'Upload your icon here',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_61522ef89810d',
                                    'operator' => '==',
                                    'value' => 'SVG',
                                ),
                            ),
                        ),
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
                        'mime_types' => 'svg',
                    ),
                    array(
                        'key' => 'field_615f663998e5e',
                        'label' => 'Additional CSS',
                        'name' => 'witlandingpages_req_btn_additional_css',
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
            ),
            array(
                'key' => 'field_615216eac0a37',
                'label' => 'Main Phone Button',
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
                'key' => 'field_614102b870cd8',
                'label' => 'Phone Link',
                'name' => 'witlandingpages_phone_link',
                'type' => 'text',
                'instructions' => 'Enter as one string with no spaces. Ex: 9995551212',
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
                'key' => 'field_6141035470cd9',
                'label' => 'Phone Number Format',
                'name' => 'witlandingpages_phone_format',
                'type' => 'text',
                'instructions' => 'Ex: (999) 555-1212 or 999-555-1212',
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
                'key' => 'field_614103b870cda',
                'label' => 'Location (optional)',
                'name' => 'witlandingpages_phone_location',
                'type' => 'text',
                'instructions' => 'Use if client has multiple phone numbers.
    Ex: Denver',
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
                'key' => 'field_614119c91723e',
                'label' => 'Second Phone Number (optional)',
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
                'key' => 'field_61411a5f17241',
                'label' => 'Phone Link',
                'name' => 'witlandingpages_phone_2_link',
                'type' => 'text',
                'instructions' => 'Enter as one string with no spaces. Ex: 9995551212',
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
                'key' => 'field_61411a8217242',
                'label' => 'Phone Number Format',
                'name' => 'witlandingpages_phone_2_format',
                'type' => 'text',
                'instructions' => 'Ex: (999) 555-1212 or 999-555-1212',
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
                'key' => 'field_61411a9817243',
                'label' => 'Location (optional)',
                'name' => 'witlandingpages_phone_2_location',
                'type' => 'text',
                'instructions' => 'Use if client has multiple phone numbers.
    Ex: Denver',
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
                'key' => 'field_615216be1b1df',
                'label' => 'Request Service Button',
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
                'key' => 'field_615217522a168',
                'label' => 'Request Service Link',
                'name' => 'witlandingpages_request_url',
                'type' => 'link',
                'instructions' => 'Link to the page Client uses for service requests. 
    If client uses Schedule Engine: you cannot use this field, you need to reach out to the Dev Team.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_6152177f2a169',
                'label' => 'Request Service Text',
                'name' => 'witlandingpages_request_display',
                'type' => 'text',
                'instructions' => 'ex: \'Schedule Service\' or \'Contact Us!\'',
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
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-landing-pages',
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
        'show_in_rest' => false,
        'modified' => 1633642125,
    ));
    
    endif;		