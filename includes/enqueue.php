<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Add the scripts.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_action('wp_enqueue_scripts', 'add_my_custom_scripts');
function add_my_custom_scripts(){
    // de-register stock jquery
    wp_deregister_script( 'jquery' );

    // register scripts
    wp_register_script('my-jquery', get_stylesheet_directory_uri().'/assets/jquery/jquery-1.12.4.min.js');
    wp_register_script('bootstrap-js', get_stylesheet_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');
    wp_register_script('my-slider', get_stylesheet_directory_uri().'/assets/javascript/slider.js');
    wp_register_script('my-javascript', get_stylesheet_directory_uri().'/assets/javascript/javascript.js');

    // enqueue scripts
    wp_enqueue_script('my-jquery', '', '', '', true);
    wp_enqueue_script('bootstrap-js', '', '', '', true);
    wp_enqueue_script('my-slider', '', '', '', true);
    wp_enqueue_script('my-javascript', '', '', '', true);
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Add the stylesheets.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_action('wp_enqueue_scripts', 'add_my_custom_styles');
function add_my_custom_styles(){
    // register styles
    wp_register_style('bootstrap', get_stylesheet_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
    wp_register_style('fontello', get_stylesheet_directory_uri().'/assets/fontello/css/fontello-embedded.css');
    wp_register_style('stylesheet', get_stylesheet_directory_uri().'/assets/stylesheet/style.css');

    // enqueue styles
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fontello');
    wp_enqueue_style('stylesheet');
}