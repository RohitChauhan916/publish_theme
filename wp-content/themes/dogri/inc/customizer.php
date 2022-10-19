<?php

function slider_customize_register($wp_customize){
    $wp_customize->add_section('dogri_slider_section', array(
        'title'    => __('Sliders', 'dogri'),
        'description' => '',
        'priority' => 120,
        'active_callback' => 'is_front_page',
    ));

    function dogri_sanitize_select($input){
        return ($input === "No") ? "No" : "Yes";
    }

    $wp_customize->add_setting('slider-display-setting', array(
        'default'           => 'No',
        'sanitize_callback' => 'dogri_sanitize_select'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'slider-display-setting-control', array(
        'label'             =>  'Display this section?',
        'section'           =>  'dogri_slider_section',
        'settings'          =>  'slider-display-setting',
        'type'              =>  'select',
        'choices'           =>  array('No' => 'No', 'Yes' => 'Yes')
    )));

    $wp_customize->add_setting('slider-image-one', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'slider-image-one-control', array(
        'label'    => 'Slider 1',
        'section'  => 'dogri_slider_section',
        'settings' => 'slider-image-one',
    )));

    $wp_customize->add_setting('banner_url_one', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'banner_url_one_control', array(
        'label'    => 'Slider 1 Url',
        'section'  => 'dogri_slider_section',
        'settings' => 'banner_url_one',
    )));

    $wp_customize->add_setting('slider-image-two', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'slider-image-two-control', array(
        'label'    => 'Slider 2',
        'section'  => 'dogri_slider_section',
        'settings' => 'slider-image-two',
    )));

    $wp_customize->add_setting('banner_url_two', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'banner_url_two_control', array(
        'label'    => 'Slider 2 Url',
        'section'  => 'dogri_slider_section',
        'settings' => 'banner_url_two',
    )));

    $wp_customize->add_setting('slider-image-three', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'slider-image-three-control', array(
        'label'    => 'Slider 3',
        'section'  => 'dogri_slider_section',
        'settings' => 'slider-image-three',
    )));

    $wp_customize->add_setting('banner_url_three', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'banner_url_three_control', array(
        'label'    => 'Slider 3 Url',
        'section'  => 'dogri_slider_section',
        'settings' => 'banner_url_three',
    )));

}

add_action('customize_register', 'slider_customize_register');

function service_customize_register($wp_customize){

    $wp_customize->add_section('dogri_service_section', array(
        'title'           => __('Services', 'dogri'),
        'description'     => '',
        'priority'        => 120,
        'active_callback' => 'is_front_page',
        'description'     =>  'Please use this for icons https://fonts.google.com/icons?selected=Material+Icons'
    ));

    function dogri_service_sanitize_select($input){
        return ($input === "No") ? "No" : "Yes";
    }

    $wp_customize->add_setting('service-display-setting', array(
        'default'           => 'No',
        'sanitize_callback' => 'dogri_service_sanitize_select'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'service-display-setting-control', array(
        'label'             =>  'Display this section?',
        'section'           =>  'dogri_service_section',
        'settings'          =>  'service-display-setting',
        'type'              =>  'select',
        'choices'           =>  array('No' => 'No', 'Yes' => 'Yes')
    )));

    $wp_customize->add_setting('service_head', array(
        'default'           => 'SERVICES',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'service_head_control', array(
        'label'    => 'Heading',
        'section'  => 'dogri_service_section',
        'settings' => 'service_head',
    )));

    $wp_customize->add_setting('icon1', array(
        'default'           => 'cloud',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'icon_control1', array(
        'label'    => 'Icon 1',
        'section'  => 'dogri_service_section',
        'settings' => 'icon1',
    )));

    $wp_customize->add_setting('icon_head1', array(
        'default'           => 'Cloud Service',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'icon_head_control1', array(
        'label'    => 'Icon 1 Heading',
        'section'  => 'dogri_service_section',
        'settings' => 'icon_head1',
    )));

    $wp_customize->add_setting('icon_para1', array(
        'default'           => 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'icon_para_control1', array(
        'label'    => 'Icon 1 Content',
        'section'  => 'dogri_service_section',
        'settings' => 'icon_para1',
        'type'     => 'textarea'
    )));

    // icon 2
    $wp_customize->add_setting('icon2', array(
        'default'           => 'trending_up',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'icon_control2', array(
        'label'    => 'Icon 2',
        'section'  => 'dogri_service_section',
        'settings' => 'icon2',
    )));

    $wp_customize->add_setting('icon_head2', array(
        'default'           => 'Analytics',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'icon_head_control2', array(
        'label'    => 'Icon 2 Heading',
        'section'  => 'dogri_service_section',
        'settings' => 'icon_head2',
    )));

    $wp_customize->add_setting('icon_para2', array(
        'default'           => 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'icon_para_control2', array(
        'label'    => 'Icon 2 Content',
        'section'  => 'dogri_service_section',
        'settings' => 'icon_para2',
        'type'     => 'textarea'
    )));

    //Icon 3
    $wp_customize->add_setting('icon3', array(
        'default'           => 'support_agent',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'icon_control3', array(
        'label'    => 'Icon 3',
        'section'  => 'dogri_service_section',
        'settings' => 'icon3',
    )));

    $wp_customize->add_setting('icon_head3', array(
        'default'           => 'Tech Support',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'icon_head_control3', array(
        'label'    => 'Icon 3 Heading',
        'section'  => 'dogri_service_section',
        'settings' => 'icon_head3',
    )));

    $wp_customize->add_setting('icon_para3', array(
        'default'           => 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'icon_para_control3', array(
        'label'    => 'Icon 3 Content',
        'section'  => 'dogri_service_section',
        'settings' => 'icon_para3',
        'type'     => 'textarea'
    )));
}
add_action('customize_register', 'service_customize_register');

function about_customize_register($wp_customize){

    $wp_customize->add_section('dogri_about_section', array(
        'title'           => __('About', 'dogri'),
        'description'     => '',
        'priority'        => 120,
        'active_callback' => 'is_front_page',
        'description'     =>  ''
    ));

    function dogri_about_sanitize_select($input){
        return ($input === "No") ? "No" : "Yes";
    }

    $wp_customize->add_setting('about-display-setting', array(
        'default'           => 'No',
        'sanitize_callback' => 'dogri_about_sanitize_select'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-display-setting-control', array(
        'label'             =>  'Display this section?',
        'section'           =>  'dogri_about_section',
        'settings'          =>  'about-display-setting',
        'type'              =>  'select',
        'choices'           =>  array('No' => 'No', 'Yes' => 'Yes')
    )));

    $wp_customize->add_setting('about_head', array(
        'default'           => 'ABOUT US',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_head_control', array(
        'label'    => 'Heading',
        'section'  => 'dogri_about_section',
        'settings' => 'about_head',
    )));

    $wp_customize->add_setting('about_para', array(
        'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_para_control', array(
        'label'    => 'Content',
        'section'  => 'dogri_about_section',
        'settings' => 'about_para',
        'type'     => 'textarea'
    )));

    $wp_customize->add_setting('about_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about_url_control', array(
        'label'    => 'Button Link',
        'section'  => 'dogri_about_section',
        'settings' => 'about_url',
    )));

    $wp_customize->add_setting('about-image', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'about-image-control', array(
        'label'    => 'Image',
        'section'  => 'dogri_about_section',
        'settings' => 'about-image',
    )));
}
add_action('customize_register', 'about_customize_register');

function footer_copy_section($wp_customize){

    $wp_customize->add_section('dogri_copy_section', array(
        'title'    => __('Footer Copyright', 'dogri'),
        'description' => '',
        'priority' => 120,
    ));

    $wp_customize->add_setting('footer_copy', array(
        'default'           => '© 2014 Copyright Text',
        'sanitize_callback' => 'wp_kses_post'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_copy_control', array(
        'label'    => 'Paragarph',
        'section'  => 'dogri_copy_section',
        'settings' => 'footer_copy',
    )));

}

add_action('customize_register', 'footer_copy_section');