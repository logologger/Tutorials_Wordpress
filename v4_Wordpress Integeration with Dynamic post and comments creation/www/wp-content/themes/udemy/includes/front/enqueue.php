<?php


function ju_enqueue(){

    wp_register_style('ju_bootstrap',get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_register_style('ju_shop',get_template_directory_uri() . '/assets/css/shop-item.css');

    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_shop');


    wp_register_script('ju_bootstrap_js',get_template_directory_uri() . '/assets/js/bootstrap.js',array(),false,true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ju_bootstrap_js');

}
?>