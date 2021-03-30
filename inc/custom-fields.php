<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5eaa8d0f6c838',
	'title' => esc_html__( 'Metabox', 'churel' ),
	'fields' => array(
		array(
			'key' => 'field_5eaa8d159dcfe',
			'label' => esc_html__('Featured', 'churel' ),
			'name' => 'featured',
			'type' => 'button_group',
			'instructions' => esc_html__('Show as featured', 'churel' ),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Yes' => 'Yes',
				'No' => 'No',
			),
			'allow_null' => 0,
			'default_value' => 'No',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
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