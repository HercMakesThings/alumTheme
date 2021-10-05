<?php
//Theme functions go here

function enqueue_alum_styles_and_scripts(){
    //deregister wp's jquery and load a different one
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_theme_file_uri(  ) . '/myassets/js/jquery-3.6.0.js', array(), null, false);
    //wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
	//wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

    //roboto font import
    wp_enqueue_style( 'roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', array(), null, 'all');
    //bootstrap css
    wp_enqueue_style( 'bootstrap-styles', get_stylesheet_directory_uri(  ) . '/myassets/bootstrap/css/bootstrap.min.css');
    //enqueue aos css
    wp_enqueue_style( 'aos-styles', get_stylesheet_directory_uri(  ) . '/myassets/aos-master/dist/aos.css');
    //main theme stylesheet
    wp_enqueue_style('stylecss', get_template_directory_uri(  ) . '/style.css', array(), '1.0.0', 'all');
    //alumni stylesheet
    wp_enqueue_style( 'alum-styles', get_stylesheet_directory_uri(  ) . '/myassets/css/alum.css', array(), '1.0.0', 'all');

    //enqueue bootstrap js
    wp_enqueue_script( 'bootstrap-script', get_theme_file_uri( ) . '/myassets/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', false );
    //enqueue aos js
    wp_enqueue_script( 'aos-script', get_theme_file_uri( ) . '/myassets/aos-master/dist/aos.js', array(), '1.0.0', false );
    //enqueue personal js files
    wp_enqueue_script( 'alum-script', get_theme_file_uri(  ) . '/myassets/js/alum.js', array('jquery'), '1.0.0', true );

    //font awesome stuff
    wp_enqueue_style( 'fa-style', get_template_directory_uri(  ) . '/myassets/fontawesome/css/all.css');
    wp_enqueue_script( 'fa-script', get_theme_file_uri( ) . '/myassets/fontawesome/js/all.js', array(), '1.0.0', false );

}

add_action('wp_enqueue_scripts', 'enqueue_alum_styles_and_scripts');

?>