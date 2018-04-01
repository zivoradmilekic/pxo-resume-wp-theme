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
	$wp_customize->add_section( 'pxo_theming_section',
		array(
			'title'         => esc_html__( 'Theming', 'pxo' ),
			'priority'      => 20
		)
	);

	$wp_customize->add_setting( 'pxo_theming_section_primary_color', array(
		'default'           => ''
	) );
	$wp_customize->add_control(new \WP_Customize_Color_Control($wp_customize, 'pxo_theming_section_primary_color', [
		'label' => __('Primary color', 'pxo'),
		'description' => __('This is primary color.', 'pxo'),
		'section' => 'pxo_theming_section',
		'settings' => 'pxo_theming_section_primary_color',
		'transport' => 'postMessage'
	]));


	// Add customizer hero section
	$wp_customize->add_section( 'pxo_hero_section',
		array(
			'title'         => esc_html__( 'Hero section', 'pxo' ),
			'priority'      => 30
		)
	);

	$wp_customize->add_setting( 'pxo_hero_section_horizontal_background_image', array(
		'default'           => ''
	) );
	$wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'pxo_hero_section_horizontal_background_image', [
		'label' => __('Horizontal background image', 'pxo'),
		'section' => 'pxo_hero_section',
		'settings' => 'pxo_hero_section_horizontal_background_image',
		'transport' => 'postMessage'
	]));

	$wp_customize->add_setting( 'pxo_hero_section_vertical_background_image', array(
		'default'           => ''
	) );
	$wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'pxo_hero_section_vertical_background_image', [
		'label' => __('Vertical background image', 'pxo'),
		'section' => 'pxo_hero_section',
		'settings' => 'pxo_hero_section_vertical_background_image',
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


	// Add customizer page section
	$wp_customize->add_section( 'pxo_page_sections',
		array(
			'title'         => esc_html__( 'Page sections', 'pxo' ),
			'priority'      => 40
		)
	);
	$sections = array(
		'about' => esc_html__( 'About section page', 'pxo' ),
		'experiences' => esc_html__( 'Experiences section page', 'pxo' ),
		'services' => esc_html__( 'Services section page', 'pxo' ),
		'skills' => esc_html__( 'Skills section page', 'pxo' ),
		'projects' => esc_html__( 'Projects section page', 'pxo' ),
		'contact' => esc_html__( 'Contact section page', 'pxo' ),
	);
	foreach ($sections as $key => $section) {
		$wp_customize->add_setting( 'pxo_' . $key . '_section_page', array(
			'default'           => ''
		) );

		$wp_customize->add_control( 'pxo_' . $key . '_section_page', array(
			'label'    => $section,
			'section'  => 'pxo_page_sections',
			'type'     => 'dropdown-pages'
		) );
	}

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
