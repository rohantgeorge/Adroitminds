<?php
function my_theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('icomoon', get_stylesheet_directory_uri() . '/icomoon.css', array(), 20141119);
    wp_enqueue_style('shortcodes', get_stylesheet_directory_uri() . '/shortcodes.css', array(), 20141119);
    wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', array(), 20141119);
    wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', array(), 20141119);
    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '20120206', true);
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '20120206', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
