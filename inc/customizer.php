
<?php
/**
 * futures Theme Customizer
 *
 * @package futures
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function futures_customize_register($wp_customize)
	{
	$wp_customize->get_setting('blogname')->transport = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	// Disabled Bakcground Image Section (which comes default with WP);

	$wp_customize->remove_section('background_image');

	/**
	 *
	 * Header Options
	 *
	 */

	$wp_customize->add_section('header_options', array(
		'title' => __('Header Options', 'futures') ,
		'description' => sprintf(__('Modify Header')) ,
		'priority' => 199,
	));

	// Header Tagline Setting and Control

	$wp_customize->add_setting('header_tag', array(
		'default' => _x('', 'futures') ,
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('header_tag', array(
		'label' => __('Header Tag Line', 'futures') ,
		'type' => 'textarea',
		'section' => 'header_options',
		'priority' => 1
	));

	// Header Background Setting and Control

	$wp_customize->add_setting('header_image', array(
		'default' => _x(get_template_directory_uri() . '/img/aerial.jpg', 'futures') ,
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
		'label' => __('Upload a left footer section image', 'futures') ,
		'section' => 'header_options',
		'settings' => 'header_image'
	)));

	/**
	 * FOOTER OPTIONS
	 */

	// The Footer Panel (since we have two sections: one for right and one for left);

	$wp_customize->add_panel('footer_options', array(
		'priority' => 200,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __('Footer Options', 'futures') ,
		'description' => __('Options for modifying the footer content', 'futures') ,
	));

	// Left Footer Section

	$wp_customize->add_section('left_footer_options', array(
		'title' => __('Left Footer Options', 'futures') ,
		'description' => sprintf(__('Modify the Footer')) ,
		'priority' => 2000,
		'panel' => 'footer_options'
	));

	// Left Footer Textarea Settings and Controls

	$wp_customize->add_setting('left_footer_section', array(
		'default' => _x('Content goes here', 'futures') ,
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('left_footer_section', array(
		'label' => __('Left Footer Content', 'futures') ,
		'type' => 'textarea',
		'section' => 'left_footer_options',
		'priority' => 2
	));

	// Left Footer Image Settings and Controls

	$wp_customize->add_setting('left_footer_image', array(
		'default' => _x('hi', 'futures') ,
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'left_footer_image', array(
		'label' => __('Upload a left footer section image', 'futures') ,
		'section' => 'left_footer_options',
		'settings' => 'left_footer_image'
	)));

	// Right Footer Section

	$wp_customize->add_section('right_footer_options', array(
		'title' => __('Right Footer Options', 'futures') ,
		'description' => sprintf(__('Modify the Footer')) ,
		'priority' => 0,
		'panel' => 'footer_options'
	));

	// Right Footer Text Area Settings and Control

	$wp_customize->add_setting('right_footer_section', array(
		'default' => _x('Content goes here', 'futures') ,
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('right_footer_section', array(
		'label' => __('Right Footer Content', 'futures') ,
		'type' => 'textarea',
		'section' => 'right_footer_options',
		'priority' => 1
	));

	// Right Footer Image Setting and Control

	$wp_customize->add_setting('right_footer_image', array(
		'default' => _x('', 'futures') ,
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'right_footer_image', array(
		'label' => __('Upload a right footer section image', 'futures') ,
		'section' => 'right_footer_options',
		'settings' => 'right_footer_image'
	)));
	}

add_action('customize_register', 'futures_customize_register');
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

function futures_customize_preview_js()
	{
	wp_enqueue_script('futures_customizer', get_template_directory_uri() . '/js/customizer.js', array(
		'customize-preview'
	) , '20130508', true);
	}

add_action('customize_preview_init', 'futures_customize_preview_js');
