<?php




//Hooks and action
add_theme_support( 'post-thumbnails' );
add_action('wp_enqueue_scripts','rs_enqueue_rajat');


function rs_enqueue_rajat()
{
    wp_register_style('rs_style_a', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('rs_style_a');
}




?>