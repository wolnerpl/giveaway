<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme
 */
include('inc/disable-editor.php');
include('inc/fields.php');
function theme_scripts() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/app.min.css', array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/dist/js/app.min.js', array(), false, true);

    $php_array = [
        'giveaway_time' => date_format(date_create(get_field('giveaway_time')),"m/d/Y")
    ];
    wp_localize_script('theme-scripts', 'php_array', $php_array);
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_setup() {
    add_theme_support('title-tag');
    add_image_size('giveaway-lg', 784);
    add_image_size('giveaway-md', 721);
}
add_action('after_setup_theme', 'theme_setup');