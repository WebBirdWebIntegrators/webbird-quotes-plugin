<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_webbird_quotes',
	'title' => __('Quotes','webbird-quotes'),
	'fields' => array (
    array (
      'key' => 'field_webbird_quotes__repeater',
      'label' => __('Overview Quotes', 'webbird-quotes'),
      'name' => 'webbird_quotes__repeater',
      'type' => 'repeater',
      'instructions' => __('Enter your quotes', 'webbird-quotes'),
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => '',
      'max' => '',
      'layout' => 'block',
      'button_label' => 'Add Quote',
      'sub_fields' => array (
        array (
          'key' => 'field_webbird_quotes__content',
          'label' => __('Quote', 'webbird-quotes'),
          'name' => 'webbird_quotes__content',
          'type' => 'wysiwyg',
          'instructions' => __('Enter your quote', 'webbird-quotes'),
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'tabs' => 'all',
          'toolbar' => 'full',
          'media_upload' => 0,
        ),
        array (
          'key' => 'field_webbird_quotes__author',
          'label' => __('Author', 'webbird-quotes'),
          'name' => '_webbird_quotes__author',
          'type' => 'text',
          'instructions' => __('Enter your author', 'webbird-quotes'),
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_webbird_quotes__image',
          'label' => __('Image', 'webbird-quotes'),
          'name' => 'webbird_quotes__image',
          'type' => 'image',
          'instructions' => __('Select or upload your image', 'webbird-quotes'),
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'thumbnail',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '5mb',
          'mime_types' => 'jpg, png',
        ),
        array (
          'key' => 'field_webbird_quotes__link_type',
          'label' => __('Link', 'webbird-quotes'),
          'name' => 'webbird_quotes__link_type',
          'type' => 'radio',
          'instructions' => __('Set your link type', 'webbird-quotes'),
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'choices' => array (
            'disabled' => __('No link', 'webbird-quotes'),
            'internal' => __('Link to a page or post', 'webbird-quotes'),
            'external' => __('Link to an external URL', 'webbird-quotes'),
          ),
          'other_choice' => 0,
          'save_other_choice' => 0,
          'default_value' => 'disabled',
          'layout' => 'horizontal',
        ),
        array (
          'key' => 'field_webbird_quotes__link_type__internal',
          'label' => __('Internal page / post', 'webbird-quotes'),
          'name' => 'webbird_quotes__link_type__internal',
          'type' => 'page_link',
          'instructions' => __('Select your page or post', 'webbird-quotes'),
          'required' => 1,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_webbird_quotes__link_type',
                'operator' => '==',
                'value' => 'internal',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'post_type' => array (
            0 => 'page',
            1 => 'post',
          ),
          'taxonomy' => array (
          ),
          'allow_null' => 0,
          'multiple' => 0,
        ),
        array (
          'key' => 'field_webbird_quotes__link_type__internal',
          'label' => __('Link to an external URL', 'webbird-quotes'),
          'name' => 'webbird_quotes__link_type__internal',
          'type' => 'url',
          'instructions' => __('Enter your external URL', 'webbird-quotes'),
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_webbird_quotes__link_type',
                'operator' => '==',
                'value' => 'external',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'http://',
        ),
      ),
    ),
	),
	'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
      ),
    ),
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'page',
      ),
    ),
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'webbird-quotes',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;

?>