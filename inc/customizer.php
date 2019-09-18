<?php
/**
 * Pixoff Resume Theme Theme Customizer
 *
 * @package Pixoff_Resume_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pxo_customize_register( WP_Customize_Manager $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	// Remove customizer sections
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('header_image');

	// Add customizer hero section
	$wp_customize->add_section( 'pxo_hero_section',
		array(
			'title'         => esc_html__( 'Hero section', 'pxo' ),
			'priority'      => 30
		)
	);

	$wp_customize->add_setting( 'pxo_hero_section_hero_background_image', array(
		'default'           => ''
	) );
	$wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'pxo_hero_section_hero_background_image', [
		'label' => __('Hero background image', 'pxo'),
		'section' => 'pxo_hero_section',
		'settings' => 'pxo_hero_section_hero_background_image',
		'transport' => 'postMessage'
	]));

	$wp_customize->add_setting( 'pxo_hero_section_hero_graphic', array(
		'default'           => ''
	) );
	$wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'pxo_hero_section_hero_graphic', [
		'label' => __('Hero graphic', 'pxo'),
		'section' => 'pxo_hero_section',
		'settings' => 'pxo_hero_section_hero_graphic',
		'transport' => 'postMessage'
	]));

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'pxo_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'pxo_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'pxo_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function pxo_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function pxo_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pxo_customize_preview_js() {
	wp_enqueue_script( 'pxo-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'pxo_customize_preview_js' );
