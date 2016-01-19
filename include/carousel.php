<?php
function anavaro_customize_carousel($wp_customize) {
	/**
	* Carousel controller
	* Will allow the user to set the index page carousel
	*/
	$wp_customize->add_section( 
		'anavaro_carousel_options', 
		array(
			'title'       => __( 'Carousel options', 'anavaro' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change front page carousel. If you want to disable any image - just leave the address empty. If you are going to use carousel you need to have at least first image', 'anavaro'), 
		) 
	);
	
	// Use carousel
	$wp_customize->add_setting( 'carousel_active',
		array(
			'default' => 1
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_active',
			array(
				'label'          => __( 'Use carousel', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'checkbox'
			)
		)
	);
	// First image control
	$wp_customize->add_setting( 'carousel_first_slide_image',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => get_template_directory_uri() . '/img/4054180179_e146a52baa_o.jpg'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_first_slide_image',
			array(
				'label'          => __( 'First image:', 'anavaro' ),
				'description' => __( 'What image should we use for first carousel slide? <br /> Best used resolution 1200x575', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'url',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	// First image text
	$wp_customize->add_setting( 'carousel_first_slide_text',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Lorem ipsum dolor sit amet amet.'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_first_slide_text',
			array(
				'label'          => __( 'First image text:', 'anavaro' ),
				'description' => __( 'What should be the text over image one?', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'text',
				'sanitize_callback' => 'sanitize_text_field',
			)
		)
	);
	//First image text position
	$wp_customize->add_setting( 'carousel_first_slide_text_pos',
		array(
			'default' => 'center'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_first_slide_text_pos',
			array(
				'label'          => __( 'First image text position:', 'anavaro' ),
				//'description' => __( 'What should be the text over image one?', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'select',
				'choices'		=> array(
					'left'		=> 'Left',
					'center'	=> 'Center',
					'right'		=> 'Right'
				)
			)
		)
	);
	// First image text url
	$wp_customize->add_setting( 'carousel_first_slide_text_url',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_first_slide_text_url',
			array(
				'label'          => __( 'First image text url:', 'anavaro' ),
				'description' => __( 'Where should the text lead to (leave empty for no URL)', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'url',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	// First image text colour
	$wp_customize->add_setting( 'carousel_first_slide_text_colour',
		array(
			'default' => '#337AB7'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'carousel_first_slide_text_colour',
			array(
				'label'          => __( 'First image text colour:', 'anavaro' ),
				'description' => __( 'What should the text colour be', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
			)
		)
	);
	
	// First image text colour hover
	$wp_customize->add_setting( 'carousel_first_slide_text_colour_hover',
		array(
			'default' => '#23527c'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'carousel_first_slide_text_colour_hover',
			array(
				'label'          => __( 'First image text colour on hover:', 'anavaro' ),
				'description' => __( 'What should the text colour be on hover', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
			)
		)
	);
	// Second image control
	$wp_customize->add_setting( 'carousel_second_slide_image',
		array(
			'default' => get_template_directory_uri() . '/img/18046343975_65c2031027_k.jpg'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_second_slide_image',
			array(
				'label'          => __( 'Second image:', 'anavaro' ),
				'description' => __( 'What image should we use for second carousel slide? <br /> Best used resolution 1200x575', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'url',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	$wp_customize->add_setting( 'carousel_second_slide_text',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Lorem ipsum dolor sit amet amet.'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_second_slide_text',
			array(
				'label'          => __( 'Second image text:', 'anavaro' ),
				'description' => __( 'What should be the text over image two?', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'text',
				'sanitize_callback' => 'sanitize_text_field',
			)
		)
	);
	//Second image text position
	$wp_customize->add_setting( 'carousel_second_slide_text_pos',
		array(
			'default' => 'center'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_second_slide_text_pos',
			array(
				'label'          => __( 'Second image text position:', 'anavaro' ),
				//'description' => __( 'What should be the text over image one?', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'select',
				'choices'		=> array(
					'left'		=> 'Left',
					'center'	=> 'Center',
					'right'		=> 'Right'
				)
			)
		)
	);
	// Second image text url
	$wp_customize->add_setting( 'carousel_second_slide_text_url',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_second_slide_text_url',
			array(
				'label'          => __( 'Second image text url:', 'anavaro' ),
				'description' => __( 'Where should the text lead to (leave empty for no URL)', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'url',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	// Second image text colour
	$wp_customize->add_setting( 'carousel_second_slide_text_colour',
		array(
			'default' => '#337AB7'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'carousel_second_slide_text_colour',
			array(
				'label'          => __( 'Second image text colour:', 'anavaro' ),
				'description' => __( 'What should the text colour be', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
			)
		)
	);
	
	// Second image text colour hover
	$wp_customize->add_setting( 'carousel_second_slide_text_colour_hover',
		array(
			'default' => '#23527c'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'carousel_second_slide_text_colour_hover',
			array(
				'label'          => __( 'Second image text colour on hover:', 'anavaro' ),
				'description' => __( 'What should the text colour be on hover', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
			)
		)
	);
	// Third image control
	$wp_customize->add_setting( 'carousel_third_slide_image',
		array(
			'default' => get_template_directory_uri() . '/img/8499155449_1235a88784_k.jpg'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_third_slide_image',
			array(
				'label'          => __( 'Third image:', 'anavaro' ),
				'description' => __( 'What image should we use for third carousel slide? <br /> Best used resolution 1200x575', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'url',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	$wp_customize->add_setting( 'carousel_third_slide_text',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Lorem ipsum dolor sit amet amet.'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_third_slide_text',
			array(
				'label'          => __( 'Third image text:', 'anavaro' ),
				'description' => __( 'What should be the text over image three?', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'text',
				'sanitize_callback' => 'sanitize_text_field',
			)
		)
	);
	//Third image text position
	$wp_customize->add_setting( 'carousel_third_slide_text_pos',
		array(
			'default' => 'center'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_third_slide_text_pos',
			array(
				'label'          => __( 'Third image text position:', 'anavaro' ),
				//'description' => __( 'What should be the text over image one?', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'select',
				'choices'		=> array(
					'left'		=> 'Left',
					'center'	=> 'Center',
					'right'		=> 'Right'
				)
			)
		)
	);
	// Third image text url
	$wp_customize->add_setting( 'carousel_third_slide_text_url',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_third_slide_text_url',
			array(
				'label'          => __( 'Third image text url:', 'anavaro' ),
				'description' => __( 'Where should the text lead to (leave empty for no URL)', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'url',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	// Third image text colour
	$wp_customize->add_setting( 'carousel_third_slide_text_colour',
		array(
			'default' => '#337AB7'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'carousel_third_slide_text_colour',
			array(
				'label'          => __( 'Third image text colour:', 'anavaro' ),
				'description' => __( 'What should the text colour be', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
			)
		)
	);
	
	// Third image text colour hover
	$wp_customize->add_setting( 'carousel_third_slide_text_colour_hover',
		array(
			'default' => '#23527c'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'carousel_third_slide_text_colour_hover',
			array(
				'label'          => __( 'Third image text colour on hover:', 'anavaro' ),
				'description' => __( 'What should the text colour be on hover', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
			)
		)
	);
	// Fourth image control
	$wp_customize->add_setting( 'carousel_fourth_slide_image',
		array(
			'default' => ''
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_fourth_slide_image',
			array(
				'label'          => __( 'Fourth image:', 'anavaro' ),
				'description' => __( 'What image should we use for fourth carousel slide? <br /> Best used resolution 1200x575', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'url',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	$wp_customize->add_setting( 'carousel_fourth_slide_text',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_fourth_slide_text',
			array(
				'label'          => __( 'Fourth image text:', 'anavaro' ),
				'description' => __( 'What should be the text over image four?', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'text',
				'sanitize_callback' => 'sanitize_text_field',
			)
		)
	);
	//fourth image text position
	$wp_customize->add_setting( 'carousel_fourth_slide_text_pos',
		array(
			'default' => 'center'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_fourth_slide_text_pos',
			array(
				'label'          => __( 'Fourth image text position:', 'anavaro' ),
				//'description' => __( 'What should be the text over image one?', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'select',
				'choices'		=> array(
					'left'		=> 'Left',
					'center'	=> 'Center',
					'right'		=> 'Right'
				)
			)
		)
	);
	// Fourth image text url
	$wp_customize->add_setting( 'carousel_fourth_slide_text_url',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_fourth_slide_text_url',
			array(
				'label'          => __( 'Fourth image text url:', 'anavaro' ),
				'description' => __( 'Where should the text lead to (leave empty for no URL)', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'url',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	// Fourth image text colour
	$wp_customize->add_setting( 'carousel_fourth_slide_text_colour',
		array(
			'default' => '#337AB7'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'carousel_fourth_slide_text_colour',
			array(
				'label'          => __( 'Fourth image text colour:', 'anavaro' ),
				'description' => __( 'What should the text colour be', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
			)
		)
	);
	
	// Fourth image text colour hover
	$wp_customize->add_setting( 'carousel_fourth_slide_text_colour_hover',
		array(
			'default' => '#23527c'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'carousel_fourth_slide_text_colour_hover',
			array(
				'label'          => __( 'Fourth image text colour on hover:', 'anavaro' ),
				'description' => __( 'What should the text colour be on hover', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
			)
		)
	);
	// Fifth image control
	$wp_customize->add_setting( 'carousel_fifth_slide_image',
		array(
			'default' => ''
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_fifth_slide_image',
			array(
				'label'          => __( 'Fifth image:', 'anavaro' ),
				'description' => __( 'What image should we use for fifth carousel slide? <br /> Best used resolution 1200x575', 'twentyfifteen' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'url',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	$wp_customize->add_setting( 'carousel_fifth_slide_text',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_fifth_slide_text',
			array(
				'label'          => __( 'Fifth image text:', 'anavaro' ),
				'description' => __( 'What should be the text over image five?', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'text',
				'sanitize_callback' => 'sanitize_text_field',
			)
		)
	);
	//Fifth image text position
	$wp_customize->add_setting( 'carousel_fifth_slide_text_pos',
		array(
			'default' => 'center'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_fifth_slide_text_pos',
			array(
				'label'          => __( 'Fifth image text position:', 'anavaro' ),
				//'description' => __( 'What should be the text over image one?', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'select',
				'choices'		=> array(
					'left'		=> 'Left',
					'center'	=> 'Center',
					'right'		=> 'Right'
				)
			)
		)
	);
	// Fifth image text url
	$wp_customize->add_setting( 'carousel_fifth_slide_text_url',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_fifth_slide_text_url',
			array(
				'label'          => __( 'Fifth image text url:', 'anavaro' ),
				'description' => __( 'Where should the text lead to (leave empty for no URL)', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'url',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	// Fifth image text colour
	$wp_customize->add_setting( 'carousel_fifth_slide_text_colour',
		array(
			'default' => '#337AB7'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'carousel_fifth_slide_text_colour',
			array(
				'label'          => __( 'Fifth image text colour:', 'anavaro' ),
				'description' => __( 'What should the text colour be', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
			)
		)
	);
	
	// Fifth image text colour hover
	$wp_customize->add_setting( 'carousel_fifth_slide_text_colour_hover',
		array(
			'default' => '#23527c'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'carousel_fifth_slide_text_colour_hover',
			array(
				'label'          => __( 'Fifth image text colour on hover:', 'anavaro' ),
				'description' => __( 'What should the text colour be on hover', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
			)
		)
	);
}
?>