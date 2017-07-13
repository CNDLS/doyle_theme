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
function futures_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

			$wp_customize->add_section('home_options', array(
			'title' => __('Homepage Options', 'futures'),
			'description' => sprintf(__('Modify homepage options')),
			'priority' => 199,
		));

		$wp_customize->add_setting('homepage_box', array(
			'default' => _x('Content goes here', 'futures'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('homepage_box', array(
			'label' => __('Homepage Info Box', 'futures'),
			'type' => 'textarea',
			'section'=> 'home_options',
			'priority' => 1
		));

		$wp_customize->add_section('footer_options', array(
			'title' => __('Footer Options', 'futures'),
			'description' => sprintf(__('Modify the Footer')),
			'priority' => 199,
		));

		$wp_customize->add_setting('left_footer_section', array(
			'default' => _x('Content goes here', 'futures'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('left_footer_section', array(
			'label' => __('Left Footer Content', 'futures'),
			'type' => 'textarea',
			'section'=> 'footer_options',
			'priority' => 1
		));


		$wp_customize->add_setting('right_footer_section', array(
			'default' => _x('Content goes here', 'futures'),
			'type' => 'theme_mod'
		));


		$wp_customize->add_control('right_footer_section', array(
			'label' => __('Right Footer Content', 'futures'),
			'type' => 'textarea',
			'section'=> 'footer_options',
			'priority' => 2
		));
		}
add_action( 'customize_register', 'futures_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function futures_customize_preview_js() {
	wp_enqueue_script( 'futures_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'futures_customize_preview_js' );
