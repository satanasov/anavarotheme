<?php
function anavaro_customize_settings($wp_customize) {
	/**
	* Carousel controller
	* Will allow the user to set the index page carousel
	*/
	$wp_customize->add_section( 
		'anavaro_base_options', 
		array(
			'title'       => __( 'Base theme settings', 'anavaro' ),
			'priority'    => 99,
			'capability'  => 'edit_theme_options',
			'description' => __('Some base theme settings.', 'anavaro'), 
		) 
	);
	
	// Use carousel
	$wp_customize->add_setting( 'posts_page',
		array(
			'default' => ''
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'posts_page',
			array(
				'label'          => __( 'Posts page', 'anavaro' ),
				'section'        => 'anavaro_base_options',
				'type'           => 'dropdown-pages',
				'description'	=> __('Which page is using Blog template? Pease create a new one if you don\'t have one!', 'anavaro')
			)
		)
	);
	
}
?>