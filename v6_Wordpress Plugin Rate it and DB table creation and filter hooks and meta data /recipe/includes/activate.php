<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/4/17
 * Time: 8:51 PM
 */

function rs_activate_plugin(){
    //Do the Version Comparision for the minimum Version required for the plugin

    if(version_compare(get_bloginfo('version'),'4.3','<')){
        wp_die(__('Your Wordpress installation is not compatible with the plugin version .Please update your wordpress','text_domain_sample'));

    }

    //When you are activating your plugin you want some values to be inserted into the DB
    //for that we will create DB

    global $wpdb;//Wordpress DB function provided some details for the DB

    $createSQL = "CREATE TABLE IF NOT EXISTS `".$wpdb->prefix."recipe_ratings` (
                `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
                `recipe_id` bigint(20) unsigned NOT NULL ,
                `rating` float(3,1) unsigned NOT NULL ,
                `user_ip` varchar(32) NOT NULL ,
                PRIMARY KEY(`id`)
                ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . " AUTO_INCREMENT=1;";

    require(ABSPATH . '/wp-admin/includes/upgrade.php');//require this file to call the below function
    dbDelta($createSQL);//Create the table by calling this function provided by wordpress
}