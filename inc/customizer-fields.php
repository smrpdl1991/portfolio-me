<?php

function portfolio_me_customize_registers($wp_customize){
    // Theme Options Panel
    $wp_customize->add_panel( 'sections', 
        array(
            //'priority'       => 100,
            'title'            => __( 'Sections', 'portfolio-me' ),
            'description'      => __( 'Theme Options', 'portfolio-me' ),
        ) 
    );
    // Text Options Section Inside Theme
    $wp_customize->add_section( 'about_section', 
        array(
            'title'         => __('About Section', 'portfolio-me' ),
            'priority'      => 1,
            'panel'         => 'sections'
        ) 
    );
    // Setting for Title
    
    $wp_customize->add_setting( 'about-heading',
        array(
            'default'           => __( 'Enter your Title', 'portfolio-me' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Title
    $wp_customize->add_control( 'about-heading', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'about_section',
            'label'       => 'What you do?',
            'description' => 'Section Title',
            
        ) 
    );
    // Setting for About section Description
    $wp_customize->add_setting( 'about-description',
        array(
            'default'           => __( 'Describe yourself', 'portfolio-me' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control forAbout section Description
    $wp_customize->add_control( 'about-description', 
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'about_section',
            'label'       => 'Title',
            'description' => 'Section Title',
        ) 
    );
    // Setting for About section Specialization
    $wp_customize->add_setting( 'about-specialization',
        array(
            'default'           => __( 'Your specialization', 'portfolio-me' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control forAbout section Specialization
    $wp_customize->add_control( 'about-specialization', 
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'about_section',
            'label'       => 'Title',
            'description' => 'Section Title',
        ) 
    );
}
if ( is_admin() || is_customize_preview() ) {
    add_action( 'customize_register', 'portfolio_me_customize_registers' );
}

?>