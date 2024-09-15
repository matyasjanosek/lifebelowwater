<?php
function theme_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri().'/output.css', array(), '1.0');
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    wp_enqueue_script('theme-script', get_template_directory_uri() . '/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
?>
