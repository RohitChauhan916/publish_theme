<?php

function slider_customize_register($wp_customize){
        $wp_customize->add_section('ayush_color_scheme', array(
            'title'    => __('Slider', 'ayush'),
            'description' => '',
            'priority' => 120,
            'active_callback' => 'is_front_page',
        ));
    
        $wp_customize->add_setting('image_upload_test', array(
            'default'           => '',
            'type'              => 'theme_mod',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'absint'
        ));
    
        $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'image_upload_test', array(
            'label'    => 'Slider 1',
            'section'  => 'ayush_color_scheme',
            'settings' => 'image_upload_test',
        )));

        $wp_customize->add_setting('image_upload_test2', array(
            'default'           => '',
            'type'              => 'theme_mod',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'absint'
        ));
    
        $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'image_upload_test2', array(
            'label'    => 'Slider 2',
            'section'  => 'ayush_color_scheme',
            'settings' => 'image_upload_test2',
        )));

        $wp_customize->add_setting('slider_text', array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post'
        ));
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'slider_text_control', array(
            'label'    => 'Slider Text',
            'section'  => 'ayush_color_scheme',
            'settings' => 'slider_text',
        )));

        $wp_customize->add_setting('banner_url', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw'
        ));
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'banner_url_control', array(
            'label'    => 'Slider Url',
            'section'  => 'ayush_color_scheme',
            'settings' => 'banner_url',
        )));

    }

add_action('customize_register', 'slider_customize_register');

function about_us_section($wp_customize){

    $wp_customize->add_section('ayush_about_section', array(
        'title'    => __('About Section', 'ayush'),
        'description' => '',
        'priority' => 120,
        'active_callback' => 'is_front_page',
    ));

    $wp_customize->add_setting('about_us_head', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_us_head_control', array(
        'label'    => 'Heading',
        'section'  => 'ayush_about_section',
        'settings' => 'about_us_head',
    )));

    $wp_customize->add_setting('about_us_para', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_us_para_control', array(
        'label'    => 'Paragraph',
        'section'  => 'ayush_about_section',
        'settings' => 'about_us_para',
        'type'     => 'textarea'
    )));

    $wp_customize->add_setting('about_us_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_us_url_control', array(
        'label'    => 'Button Link',
        'section'  => 'ayush_about_section',
        'settings' => 'about_us_url',
    )));

}

add_action('customize_register', 'about_us_section');


function footer_copy_section($wp_customize){

    $wp_customize->add_section('ayush_copy_section', array(
        'title'    => __('Footer Copyright', 'ayush'),
        'description' => '',
        'priority' => 120,
    ));

    $wp_customize->add_setting('footer_copy', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_copy_control', array(
        'label'    => 'Paragarph',
        'section'  => 'ayush_copy_section',
        'settings' => 'footer_copy',
    )));

}

add_action('customize_register', 'footer_copy_section');