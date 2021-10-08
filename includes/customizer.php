<?php
//funtion for customizing top secton images and heading
function alum_landing_images($wp_customize){
    //declaring new customizer section
    $wp_customize->add_section('landingpage_identity_section', array(
        'title' => 'Top Section Identity',
        'priority' => 1
    ));

    //setting & Control pair for landing page site title
    $wp_customize->add_setting('landingpage_identity_title', array(
        'default' => 'Alumni Designs'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'landingpage_identity_title_control', array(
        'label' => 'Landing Page Title',
        'section' => 'landingpage_identity_section',
        'settings' => 'landingpage_identity_title'
    )));

    //setting & Congrol pair for landing page bgm
    $wp_customize->add_setting('landingpage_identity_bgm');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'landingpage_identity_bgm_control', array(
        'label' => 'Background Image',
        'section' => 'landingpage_identity_section',
        'settings' => 'landingpage_identity_bgm',
        'width' => '1920',
        'height' => '1080'
    )));

    //setting & Congrol pair for landing page logo
    $wp_customize->add_setting('landingpage_identity_logo');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'landingpage_identity_logo_control', array(
        'label' => 'Personal Profile Picture OR Logo',
        'section' => 'landingpage_identity_section',
        'settings' => 'landingpage_identity_logo',
        'width' => '150',
        'height' => '150'
    )));

}

add_action('customize_register', 'alum_landing_images');


?>