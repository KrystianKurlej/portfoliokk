<?php 
//line for security headers
add_action( 'send_headers', 'send_frame_options_header', 10, 0 );

//theme features capabilty
function sample_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme','sample_theme_support');

//declare menus
function sample_menus(){
    $locations = array(
        'menu' => "menu",
        'footer' => "footer"
    );

    register_nav_menus($locations);
}

add_action('init','sample_menus');

//link css
function sample_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('sample-stylesheet', get_template_directory_uri()."/style.css", array(), $version, 'all');
}

add_action( 'wp_enqueue_scripts', 'sample_register_styles');

//link javascript
function sample_register_scripts(){
    wp_enqueue_script('sample-javascript', get_template_directory_uri()."/js/script.js", array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'sample_register_scripts');

// thumnail size
function custom_thumbnail_size() {
    add_image_size( 'big-thumbnail', 1300, 450, true );
    add_image_size( 'mid-thumbnail', 400, 300, true );
}
add_action( 'after_setup_theme', 'custom_thumbnail_size' );
?>