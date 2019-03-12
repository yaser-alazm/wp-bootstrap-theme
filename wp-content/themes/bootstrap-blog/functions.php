<?php

// Register NavWalker Custom Menu (for the dropdown elements)
if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
    // file does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function wpb_theme_setup()
{
    // Add post thumbnails
    add_theme_support('post-thumbnails');

    // Add image size
    add_image_size('category-thumb', 500, 500, true );

    // Register menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', ''),
        'social'    => __('Social Menu', '')
    ));
}

add_action('after_setup_theme', 'wpb_theme_setup');

// Edit the excerpt words length
function edit_default_excerpt_length()
{
    return 40; // 40 words
}

add_filter('excert_length', 'edit_default_excerpt_length');

// Activate widgets
function wpb_widgets_init($id){
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div class="p-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="font-italic">',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name'  => 'About Sidebar',
        'id'    => 'about',
        'before_widget' => '<div class="p-4 mb-3 bg-light rounded">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="font-italic">',
        'after_title'  => '</h4>'
    ));

    register_sidebar(array(
        'name'  => 'Contact Form',
        'id'    => 'contact',
        'before_widget' => '<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">',
        'after_widget'  => '</div>'
    ));
}

add_action('widgets_init', 'wpb_widgets_init');

/*
//
// Adding the customizer with icon-picker settings
//
*/

// Define icon-picker settings for the customizer
define( 'O2_DIRECTORY', get_template_directory() . '/inc/o2/' );
define( 'O2_DIRECTORY_URI', get_template_directory_uri() . '/inc/o2/' );
// Require the file
require get_template_directory() . '/inc/o2/controls/icon-picker/icon-picker-control.php';

// Adding Customizer
require get_template_directory() . '/inc/customizer.php';
