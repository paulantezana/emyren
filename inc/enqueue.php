<?php
function emyren_load_scripts(){
    wp_register_script( 'slick',  get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery']);
    wp_register_script( 'slider',  get_template_directory_uri() . '/assets/js/slider.js', ['jquery'] );

    wp_enqueue_script( 'slick');
    wp_enqueue_script( 'slider');

    wp_register_style( 'load_css', get_template_directory_uri() . '/assets/css/styles.css', [], 'all' );
    wp_enqueue_style( 'load_css');

    wp_register_style( 'load_slick_css', get_template_directory_uri() . '/assets/css/slick.css', [], 'all' );
    wp_enqueue_style( 'load_slick_css');

}
add_action('wp_enqueue_scripts','emyren_load_scripts');
