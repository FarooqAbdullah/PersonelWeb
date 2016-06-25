<?php

/**
 * Theme functions
 */


/**
 * Add Theme Supports
 */

function wtpw_setup() {
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('menus');
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'wtpw_setup');


 /**
 * Theme Styles and Scripts
 */
function wtpw_styles_scripts() {

    // Theme Styles
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css', array(), null);
    wp_enqueue_style( 'style-css', get_template_directory_uri().'/css/style.css', array('bootstrap-css'), null);

    // Theme Scripts
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.js',array('jquery'),'',true);
     wp_enqueue_script( 'theme-js', get_template_directory_uri().'/js/theme.js',array('bootstrap-js'),'',true);

   
}

add_action( 'wp_enqueue_scripts', 'wtpw_styles_scripts' );

?>

