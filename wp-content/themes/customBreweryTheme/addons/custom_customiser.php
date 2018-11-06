<?php

function custom_theme_customizer($wp_customize){






//FRONT PAGE INTRO HEADER TEXT
    $wp_customize->add_section('custom_theme_home_intro_title_text', array(
        'title' => __('Intro Title Text Styles' , 'customBreweryTheme'),
        'priority' => 50
    ));


    $wp_customize->add_setting('home_intro_title_text_setting', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'home_intro_title_text_control',
            array(
                'label' => __('Home Intro Title Text' , 'customBreweryTheme'),
                'section' => 'custom_theme_home_intro_title_text',
                'settings' => 'home_intro_title_text_setting'
            )
        )
    );





//FRONT PAGE INTRO TEXT
    $wp_customize->add_section('custom_theme_home_intro_text', array(
        'title' => __('Intro Text Styles' , 'customBreweryTheme'),
        'priority' => 51
    ));


    $wp_customize->add_setting('home_intro_text_setting', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'home_intro_text_control',
            array(
                'label' => __('Home Intro Text' , 'customBreweryTheme'),
                'section' => 'custom_theme_home_intro_text',
                'settings' => 'home_intro_text_setting'
            )
        )
    );



//FRONT PAGE FEATURE IMAGE

    $wp_customize->add_section('custom_theme_home_feature_image', array(
        'title' => __('Home Feature Image' , 'customBreweryTheme'),
        'priority' => 52
    ));

    $wp_customize->add_setting('home_feature_image_setting', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'home_feature_image_control',
           array(
               'label'      => __( 'Home Feature Image', 'customBreweryTheme' ),
               'section'    => 'custom_theme_home_feature_image',
               'settings'   => 'home_feature_image_setting'
           )
       )
   );















//FRONT PAGE FEATURE IMAGE TITLE TEXT
$wp_customize->add_section('custom_theme_home_feature_image_title_text', array(
    'title' => __('Feature Image Title Text Styles' , 'customBreweryTheme'),
    'priority' => 53
));


$wp_customize->add_setting('home_feature_image_title_text_setting', array(
    'default' => '',
    'transport' => 'refresh'
));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'home_feature_image_title_text_control',
        array(
            'label' => __('Home Feature Image Title Text' , 'customBreweryTheme'),
            'section' => 'custom_theme_home_feature_image_title_text',
            'settings' => 'home_feature_image_title_text_setting'
        )
    )
);











//FRONT PAGE FEATURE IMAGE HEADER TEXT
$wp_customize->add_section('custom_theme_home_feature_image_text', array(
    'title' => __('Feature Image Text Styles' , 'customBreweryTheme'),
    'priority' => 53
));


$wp_customize->add_setting('home_feature_image_text_setting', array(
    'default' => '',
    'transport' => 'refresh'
));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'home_feature_image_text_control',
        array(
            'label' => __('Home Feature Image Text' , 'customBreweryTheme'),
            'section' => 'custom_theme_home_feature_image_text',
            'settings' => 'home_feature_image_text_setting'
        )
    )
);















//FOOTER TEXT
$wp_customize->add_section('custom_theme_footer_text', array(
    'title' => __('Footer Text Styles' , 'customBreweryTheme'),
    'priority' => 53
));


$wp_customize->add_setting('footer_text_setting', array(
    'default' => '',
    'transport' => 'refresh'
));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_text_control',
        array(
            'label' => __('Footer Text' , 'customBreweryTheme'),
            'section' => 'custom_theme_footer_text',
            'settings' => 'footer_text_setting'
        )
    )
);

















}

add_action('customize_register' , 'custom_theme_customizer');
