<?php

function business_cunsomize_register($wp_customize)
{
    // banner section
    $wp_customize->add_section('banner', array(
        'title' => __('Banner', 'business'),
        'description' => sprintf(__(
            'options for homepage banner',
            'bussiness'
        )),
        'priority' => 130
    ));

    //heading setting
    $wp_customize->add_setting('banner_heading', array(
        'default' => __('Banner Heading', 'business'),
        'type' => 'theme_mod'
    ));

    //heading control
    $wp_customize->add_control('banner_heading', array(
        'label' => __('Heading', 'business'),
        'section' => 'banner',
        'priority' => 20
    ));

    //text setting
    $wp_customize->add_setting('banner_text', array(
        'default' => __('Welcome to the Wordpress Business theme.
         this uses the Twitter bootstrap framework and can
          be customized to your liking', 'business'),
        'type' => 'theme_mod'
    ));

    //text control
    $wp_customize->add_control('banner_text', array(
        'label' => __('Text', 'business'),
        'section' => 'banner',
        'priority' => 20
    ));

    //button setting
    $wp_customize->add_setting('banner_btn_text', array(
        'default' => __('Sign Up', 'business'),
        'type' => 'theme_mod'
    ));

    //button control
    $wp_customize->add_control('banner_btn_text', array(
        'label' => __('Button Text', 'business'),
        'section' => 'banner',
        'priority' => 20
    ));

    //button url setting
    $wp_customize->add_setting('banner_btn_url', array(
        'default' => __('http://test.com'),
        'type' => 'theme_mod'
    ));

    //button url control
    $wp_customize->add_control('banner_btn_url', array(
        'label' => __('Button url', 'business'),
        'section' => 'banner',
        'priority' => 20
    ));

    //background img setting
    $wp_customize->add_setting('banner_image', array(
        'default' => get_bloginfo('template_directory')
            . '/img/banner.jpg',
        'type' => 'theme_mod'
    ));

    //background img control
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'banner_image',
        array(
            'label' => __('Background Image', 'business'),
            'section' => 'banner',
            'settings' => 'banner_image',
        )
    ));




    // Boxes section
    $wp_customize->add_section('boxes', array(
        'title' => __('Boxes', 'business'),
        'description' => sprintf(__(
            'options for homepage boxes',
            'bussiness'
        )),
        'priority' => 130
    ));


    //Box 1 heading setting
    $wp_customize->add_setting('box1_heading', array(
        'default' => __('Box 1  Heading', 'business'),
        'type' => 'theme_mod'
    ));

    //Box 1 heading control
    $wp_customize->add_control('box1_heading', array(
        'label' => __('Heading', 'business'),
        'section' => 'boxes',
        'priority' => 20
    ));

    //Box 1 text setting
    $wp_customize->add_setting('box1_text', array(
        'default' => __('Welcome to the Wordpress Business theme.
         this uses the Twitter bootstrap framework and can
          be customized to your liking', 'business'),
        'type' => 'theme_mod'
    ));

    //Box 1 text control
    $wp_customize->add_control('box1_text', array(
        'label' => __('Text', 'business'),
        'section' => 'boxes',
        'priority' => 20
    ));

    //Box 1 icon setting
    $wp_customize->add_setting('box1_icon', array(
        'default' => _x('bar-chart', 'business'),
        'type' => 'theme_mod'
    ));

    //Box 1 icon control
    $wp_customize->add_control('box1_icon', array(
        'label' => __('Box 1 Icon', 'business'),
        'section' => 'boxes',
        'priority' => 20
    ));

    //Box 2 heading setting
    $wp_customize->add_setting('box2_heading', array(
        'default' => __('Box 2  Heading', 'business'),
        'type' => 'theme_mod'
    ));

    //Box 2 heading control
    $wp_customize->add_control('box2_heading', array(
        'label' => __('Heading', 'business'),
        'section' => 'boxes',
        'priority' => 20
    ));

    //Box 2 text setting
    $wp_customize->add_setting('box2_text', array(
        'default' => __('Welcome to the Wordpress Business theme.
             this uses the Twitter bootstrap framework and can
              be customized to your liking', 'business'),
        'type' => 'theme_mod'
    ));

    //Box 2 text control
    $wp_customize->add_control('box2_text', array(
        'label' => __('Text', 'business'),
        'section' => 'boxes',
        'priority' => 20
    ));

    //Box 2 icon setting
    $wp_customize->add_setting('box2_icon', array(
        'default' => _x('code', 'business'),
        'type' => 'theme_mod'
    ));

    //Box 2 icon control
    $wp_customize->add_control('box2_icon', array(
        'label' => __('Box 2 Icon', 'business'),
        'section' => 'boxes',
        'priority' => 20
    ));

    //Box 3 heading setting
    $wp_customize->add_setting('box3_heading', array(
        'default' => __('Box 3  Heading', 'business'),
        'type' => 'theme_mod'
    ));

    //Box 3 heading control
    $wp_customize->add_control('box3_heading', array(
        'label' => __('Heading', 'business'),
        'section' => 'boxes',
        'priority' => 30
    ));

    //Box 3 text setting
    $wp_customize->add_setting('box3_text', array(
        'default' => __('Welcome to the Wordpress Business theme.
                 this uses the Twitter bootstrap framework and can
                  be customized to your liking', 'business'),
        'type' => 'theme_mod'
    ));

    //Box 3 text control
    $wp_customize->add_control('box3_text', array(
        'label' => __('Text', 'business'),
        'section' => 'boxes',
        'priority' => 30
    ));

    //Box 3 icon setting
    $wp_customize->add_setting('box3_icon', array(
        'default' => _x('desktop', 'business'),
        'type' => 'theme_mod'
    ));

    //Box 3 icon control
    $wp_customize->add_control('box3_icon', array(
        'label' => __('Box 3 Icon', 'business'),
        'section' => 'boxes',
        'priority' => 30
    ));
}

add_action('customize_register', 'business_cunsomize_register');
