<?php
function anavaro_customize_feature($wp_customize) {
	/**
	* 3 Column feature
	* Will allow the user to set the index page 3 column features
	* This is those 3 things that nobody know how to call but all use them
	*/
	$wp_customize->add_section( 
		'anavaro_feature_options', 
		array(
			'title'       => __( '3 Column feaured', 'anavaro' ),
			'priority'    => 101,
			'capability'  => 'edit_theme_options',
			'description' => __('This will allow you to set text and icons for the 3 column fetured under the carousel. To select icons go to <a href="https://fortawesome.github.io/Font-Awesome/icons/">Font Awsome homepage</a> and copy the icon name. I promise to create some kind of selector in the future.', 'anavaro'), 
		) 
	);
	
	// Use 3 column featured
	$wp_customize->add_setting( 'feature_active',
		array(
			'default' => 1
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'feature_active',
			array(
				'label'          => __( 'Use 3 column featured', 'anavaro' ),
				'section'        => 'anavaro_feature_options',
				'type'           => 'checkbox'
			)
		)
	);

	//First column icon
	$wp_customize->add_setting('feature_first_icon',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'fa-rebel'
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control(
			$wp_customize,
			'feature_first_icon',
			array(
				'label'	=> 'Select first icon',
				'type'           => 'text',
				'section'	=> 'anavaro_feature_options',
				'sanitize_callback' => 'sanitize_text_field',
			)
		)
	);
	
	$wp_customize->add_setting('feature_first_text',
		array(
			'sanitize_callback' => 'esc_html',
			'default' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit tristique maximus. Nunc vitae aliquam magna. Curabitur elementum blandit sem, ac tincidunt est. Suspendisse interdum sodales tincidunt. Etiam commodo porttitor tortor, et porttitor metus vestibulum ac. Maecenas scelerisque tortor quis nisl vehicula, et venenatis dolor commodo. Donec lacinia, lorem id ultrices feugiat, tortor sapien luctus leo, ut cursus enim nunc ac nisi. Donec magna dui, vestibulum et viverra ac, pulvinar ac felis. Pellentesque rutrum lacinia dictum.'
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control(
			$wp_customize,
			'feature_first_text',
			array(
				'label'	=> 'Select first text',
				'type'           => 'textarea',
				'section'	=> 'anavaro_feature_options',
				'sanitize_callback' => 'esc_html',
			)
		)
	);

	// Second column icon
	$wp_customize->add_setting('feature_second_icon',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'fa-camera-retro'
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control(
			$wp_customize,
			'feature_second_icon',
			array(
				'label'	=> 'Select second icon',
				'type'           => 'text',
				'section'	=> 'anavaro_feature_options',
				'sanitize_callback' => 'sanitize_text_field',
			)
		)
	);
	
	$wp_customize->add_setting('feature_second_text',
		array(
			'sanitize_callback' => 'esc_html',
			'default' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit tristique maximus. Nunc vitae aliquam magna. Curabitur elementum blandit sem, ac tincidunt est. Suspendisse interdum sodales tincidunt. Etiam commodo porttitor tortor, et porttitor metus vestibulum ac. Maecenas scelerisque tortor quis nisl vehicula, et venenatis dolor commodo. Donec lacinia, lorem id ultrices feugiat, tortor sapien luctus leo, ut cursus enim nunc ac nisi. Donec magna dui, vestibulum et viverra ac, pulvinar ac felis. Pellentesque rutrum lacinia dictum.'
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control(
			$wp_customize,
			'feature_second_text',
			array(
				'label'	=> 'Select second text',
				'type'           => 'textarea',
				'section'	=> 'anavaro_feature_options',
				'sanitize_callback' => 'esc_html',
			)
		)
	);
	
	// Third column icon
	$wp_customize->add_setting('feature_third_icon',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'fa-hand-lizard-o'
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control(
			$wp_customize,
			'feature_third_icon',
			array(
				'label'	=> 'Select third icon',
				'type'           => 'text',
				'section'	=> 'anavaro_feature_options',
				'sanitize_callback' => 'sanitize_text_field',
			)
		)
	);
	
	$wp_customize->add_setting('feature_third_text',
		array(
			'sanitize_callback' => 'esc_html',
			'default' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit tristique maximus. Nunc vitae aliquam magna. Curabitur elementum blandit sem, ac tincidunt est. Suspendisse interdum sodales tincidunt. Etiam commodo porttitor tortor, et porttitor metus vestibulum ac. Maecenas scelerisque tortor quis nisl vehicula, et venenatis dolor commodo. Donec lacinia, lorem id ultrices feugiat, tortor sapien luctus leo, ut cursus enim nunc ac nisi. Donec magna dui, vestibulum et viverra ac, pulvinar ac felis. Pellentesque rutrum lacinia dictum.'
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control(
			$wp_customize,
			'feature_third_text',
			array(
				'label'	=> 'Select third text',
				'type'           => 'textarea',
				'section'	=> 'anavaro_feature_options',
				'sanitize_callback' => 'esc_html',
			)
		)
	);
}
?>