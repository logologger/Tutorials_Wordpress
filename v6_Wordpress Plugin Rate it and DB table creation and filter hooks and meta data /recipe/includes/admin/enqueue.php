<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/4/17
 * Time: 11:52 PM
 */
function rs_admin_enqueue(){

    global $typenow;
    if($typenow!=='recipe'){
        return ;
    }

    //Register and Enqueu the Styles and scripts

    wp_register_style('r_bootstrap',plugins_url('/assets/css/bootstrap.css',RECIPE_PLUGIN_URL));
    wp_enqueue_style('r_bootstrap');

}