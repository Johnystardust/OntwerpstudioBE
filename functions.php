<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Enqueue.
|-----------------------------------------------------------------------------------------------------------------------
*/
get_template_part('includes/enqueue');

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Custom Post Type.
|-----------------------------------------------------------------------------------------------------------------------
*/
get_template_part('includes/cpt');

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Add thumbnails support.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_theme_support( 'post-thumbnails' );

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Remove WYSIWYG editor from page or post.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_action( 'admin_head', 'hide_editor' );

function hide_editor() {
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');

}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Register menu.
|-----------------------------------------------------------------------------------------------------------------------
*/
function tvds_register_menu_init() {
    register_nav_menu('main-menu',__( 'Hoofdmenu' ));
    register_nav_menu('footer-menu',__( 'Footermenu' ));
}
add_action( 'init', 'tvds_register_menu_init' );

/*
|-----------------------------------------------------------------------------------------------------------------------
|   ACF Load value.
|
|   Custom filter for WYSIWYG editor cutoff at <--!more--> tag.
|-----------------------------------------------------------------------------------------------------------------------
*/
function my_acf_load_value( $value)
{
    // Get the value and apply the_content filter
    $value = apply_filters('the_content',$value);

    // If there is a <!--more--> tag strip the excess text
    if(strpos($value, '<!--more-->')){
        $value = substr($value, 0, strpos($value, "<!--more-->"));
    }
    // If false do nothing
    else {
    }

    // Return the value
    return $value;
}
add_filter('acf', 'my_acf_load_value', 10, 3);

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Register options page for slider.
|-----------------------------------------------------------------------------------------------------------------------
*/
acf_add_options_page(array(

    'page_title'    => 'Slider',
    'menu_title'    => 'Slider',
    'menu_slug'     => 'slider',
    'capability'    => 'edit_posts',
    'icon_url'      => 'dashicons-slides',
    'position'      => 26

));