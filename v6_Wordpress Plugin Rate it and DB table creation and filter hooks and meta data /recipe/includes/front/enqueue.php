<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22/4/17
 * Time: 4:05 PM
 */

function rs_enqueue_script(){

    //load the styles and script for the rateit Plugin

    wp_register_style('r_rateit_css',plugins_url('assets/rateit/rateit.css',RECIPE_PLUGIN_URL));
    wp_enqueue_style('r_rateit_css');


   // wp_enqueue_script('jquery');

    wp_register_script('r_rateit_js',plugins_url('assets/rateit/jquery.rateit.js',RECIPE_PLUGIN_URL),array(),'1.0.0',true);
    wp_enqueue_script('r_rateit_js');

    wp_register_script('rs_main_js',plugins_url('assets/js/main.js',RECIPE_PLUGIN_URL),array(),'1.0.0',true);
    wp_enqueue_script('rs_main_js');

    //Somehow I am not able to load the rateit in my custom template ..Need to look on it what it the problem


}