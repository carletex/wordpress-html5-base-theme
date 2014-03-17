<?php

add_theme_support( 'nav-menus' );
add_theme_support( 'post-thumbnails' );

/* Menus */
if (function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
			'main' => __('Main Menu'),
			'footer' => __('Footer Menu'),

		)
	);
}

/* Sidebars */
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'before_widget' => '<hr>',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

/* Theme settings */

/* Logo */
function wordpresstheme_theme_customizer( $wp_customize ) {
	// Logo
    $wp_customize->add_section( 'logo_section' , array(
    	'title'       => __( 'Logo', 'wordpresstheme' ),
    	'priority'    => 30,
    	'description' => 'Logo del sitio',
	));

	$wp_customize->add_setting( 'logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo', array(
    	'label'    => __( 'Logo', 'wordpresstheme' ),
    	'section'  => 'logo_section',
    	'settings' => 'logo',
	)));
}
add_action('customize_register', 'wordpresstheme_theme_customizer');