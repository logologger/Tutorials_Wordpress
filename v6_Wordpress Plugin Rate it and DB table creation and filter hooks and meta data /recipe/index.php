<?php
/**
 *
 * Plugin Name:Top 5 Recipe
 * Description:A Simple Plugin that will allow us to post Dishes (Recipe) using Custom Post Functionality and will also allow us to rate the Dishes ---also the Top 5 Dishes of the week
 * Author: Rajat Singh
 * Version: 1.0.1
 */

//Set UP

//Securing a Plugin is very important
//Prevent the user from calling the plugin directly ...instead wordpress should load the plugin
//User should not load the plugin directly from outside the wordpress ..It should be loaded from the wordpress
//The Logic to do this is by seeing that wordpress files get loaded ..If they loaded it means that plugin is loaded from the wordpress and not by some external user


define ('RECIPE_PLUGIN_URL',__FILE__);//DEfine the constant required in loading styles and script in admin section

if(!function_exists('add_action')){
    echo 'You are not allowed to use this plugin ';
    exit();//Exit the plugin directory
}


//Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/init.php');
include('process/save-post.php');
include('process/filter-content-page.php');
include('includes/front/enqueue.php');
//Hooks
//ACtivate the Recipe Plugin

register_activation_hook(__FILE__,'rs_activate_plugin');
add_action('init','recipe_init');//Hook for Custom Post
//Custom  post hook should always be called after the init ..if called before init function it will not work
//I wanted menu Support in Wordpress


add_action('admin_init','recipe_admin_init');//When the admin get initialised then load the function recipe_admin_init for loading meta boxes for recipe

add_action('save_post_recipe','r_save_post_admin',10,3);//Last Parameter gives Number of imformation that we want to pass through the hook
//Hook that triggers when you save your custome post only

add_filter('the_content','rs_filter_content_page');//Trigger the hook only when content gets loaded in the page

add_action('wp_enqueue_scripts','rs_enqueue_script',999);//load this hook after the jquery gets loaded

//ShortCodes
