<?php 
function inb_customize_register( $wp_customize ) {
    // Header
	$wp_customize->add_section( 'header' , array(
	'title' => __( 'Header', 'ra' ),
	'priority' => 105,
	) );

	$wp_customize->add_setting( 'logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label' => __( 'Upload Logo ', 'ra' ),
		'section' => 'header',
		'settings' => 'logo',
	) ) );
    // End Header
    
    // // Footer
    // $wp_customize->add_section( 'footer' , array(
	// 'title' => __( 'Footer', 'ra' ),
	// 'priority' => 110,
	// ) );

    // $wp_customize->add_setting( 'logo-footer' );
	// $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo-footer', array(
	// 	'label' => __( 'Upload Logo ', 'ra' ),
	// 	'section' => 'footer',
	// 	'settings' => 'logo-footer',
	// ) ) );

    // $wp_customize->add_setting( 'desc' );
    // $wp_customize->add_control( 'desc', array(
    //     'label' => __( 'Description', 'ra' ),
    //     'type' => 'textarea',
    //     'section' => 'footer',
    // ) );

	// $wp_customize->add_setting( 'copyright-left' );
    // $wp_customize->add_control( 'copyright-left', array(
    //     'label' => __( 'Copyrights (Left)', 'ra' ),
    //     'type' => 'text',
    //     'section' => 'footer',
    // ) );

    // $wp_customize->add_setting( 'copyright-right' );
    // $wp_customize->add_control( 'copyright-right', array(
    //     'label' => __( 'Copyrights (right)', 'ra' ),
    //     'type' => 'text',
    //     'section' => 'footer',
    // ) );
    // // End Footer

}

add_action( 'customize_register', 'inb_customize_register' );