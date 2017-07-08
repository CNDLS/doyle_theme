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


// 	$wp_customize->add_section('home_options', array(
// 		'title' => __('Homepage Options', 'futures'),
// 		'description' => sprintf(__('Modify homepage options')),
// 		'priority' => 199,
// 	));
//
// 	$wp_customize->add_setting('homepage_box', array(
// 		'default' => _x('Content goes here', 'futures'),
// 		'type' => 'theme_mod'
// 	));
//
// 	$wp_customize->add_control('homepage_box', array(
// 		'label' => __('Homepage Info Box', 'futures'),
// 		'type' => 'textarea',
// 		'section'=> 'home_options',
// 		'priority' => 1
// 	));
}
add_action( 'customize_register', 'futures_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function futures_customize_preview_js() {
	wp_enqueue_script( 'futures_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'futures_customize_preview_js' );
