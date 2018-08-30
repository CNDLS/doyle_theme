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
		'default' => 'Engaging Difference in Higher Education',
		'type' => 'theme_mod',
	));
	$wp_customize->add_control('header_tag', array(
		'label' => __('Header Tag Line', 'futures') ,
		'type' => 'textarea',
		'section' => 'header_options',
		'priority' => 1
	));

	// Header Background Setting and Control

	$wp_customize->add_setting('header_image', array(
		'default' => get_template_directory_uri() . '/img/aerial.jpg',
		'type' => 'theme_mod',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
		'label' => 'Header Image',
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
		'priority' => 1,
		'panel' => 'footer_options'
	));

	// Left Footer Settings and Controls

	$wp_customize->add_setting('left_footer_url', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('left_footer_url', array(
		'label' => 'Left Footer URL',
		'type' => 'text',
		'section' => 'left_footer_options',
	));

	$wp_customize->add_setting('left_footer_phone', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('left_footer_phone', array(
		'label' => 'Left Footer Phone',
		'type' => 'text',
		'section' => 'left_footer_options',
	));

	$wp_customize->add_setting('left_footer_email', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('left_footer_email', array(
		'label' => 'Left Footer Email',
		'type' => 'text',
		'section' => 'left_footer_options',
	));

	// TO-DO: Madke image customizable by theme customizer

	// Right Footer Section

	$wp_customize->add_section('right_footer_options', array(
		'title' => 'Right Footer Options',
		'priority' => 1,
		'panel' => 'footer_options'
	));

	// Right Footer Settings and Controls

	$wp_customize->add_setting('right_footer_url', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('right_footer_url', array(
		'label' => 'Right Footer URL',
		'type' => 'text',
		'section' => 'right_footer_options',
	));

	$wp_customize->add_setting('right_footer_phone', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('right_footer_phone', array(
		'label' => 'Right Footer Phone',
		'type' => 'text',
		'section' => 'right_footer_options',
	));

	$wp_customize->add_setting('right_footer_email', array(
		'default' => '',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('right_footer_email', array(
		'label' => 'Right Footer Email',
		'type' => 'text',
		'section' => 'right_footer_options',
	));

	// Right Footer Image Setting and Control

		// TO-DO: Make right footer image pull data from Theme Customizer. Currently hardcoded.


	}

add_action('customize_register', 'futures_customize_register');
