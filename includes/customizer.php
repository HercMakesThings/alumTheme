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
        'width' => '1912',
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

function alum_site_colors($wp_customize){
    //color picker setting
    $wp_customize->add_setting('alum_color_setting', array(
        'default' => '#760355',
        'transport' => 'refresh'
    ));
    //declaring new customizer section
    $wp_customize->add_section('alum_color_section', array(
        'title' => 'Site Color',
        'priority' => 30
    ));
    //color picker control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'alum_color_control', array(
        'label' => __('Site Color'),
        'section' => 'alum_color_section',
        'settings' => 'alum_color_setting'
    )));
}
add_action('customize_register','alum_site_colors');

function alum_customizer_css(){ ?>

    <style type="text/css">
        #slantedsec1{
            background-color: <?php echo get_theme_mod('alum_color_setting'); ?>;!important
        }

        #topnavbarcontainer{
            border-bottom: 4px solid <?php echo get_theme_mod('alum_color_setting'); ?>;!important
        }

        #topnavbar a{
            color: <?php echo get_theme_mod('alum_color_setting'); ?>;!important
        }

        #topnavbar li:hover{
            background-color: <?php echo get_theme_mod('alum_color_setting'); ?>;!important
        }

        #topnavbar a:hover{
            background-color: <?php echo get_theme_mod('alum_color_setting'); ?>;!important
        }

        footer a:hover{
            color: <?php echo get_theme_mod('alum_color_setting'); ?>;!important
        }
    </style>

<?php }

add_action('wp_head', 'alum_customizer_css');

?>