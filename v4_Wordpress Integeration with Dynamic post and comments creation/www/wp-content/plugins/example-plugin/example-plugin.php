<?php

/*
Plugin Name:Welcome Page Plugin
Plugin URI: http://wordpress.org/plugins/rajat/
Description:  Nothing can be done now.
Author: Rajat Bhadauria
Version: 1.6
Author URI:rajat.net
*/


class My_Example_plugin{

    private static $instance;

    public static function getInstance(){
        if(self::$instance==null){
            self::$instance=new self();
        }
        return self::$instance;
    }

    private function  __construct()
    {
        //Implement the hooks here

        remove_action('welcome_panel','wp_welcome_panel');


        add_action('welcome_panel',array($this,'rajat_welcome_panel'));

        add_action('admin_enqueue_scripts',array($this,'add_css'));
    }


    function rajat_welcome_panel(){
        ?>

        <div class="welcome-panel-content">
            <h2><?php _e( 'Welcome to Anti-Romeo Squad by Rajat Baba!' ); ?></h2>
            <p class=""><?php _e( 'We Welcome you to bajrang Dal Part 2' ); ?></p>
        </div>

        <?php
    }

    function add_css(){


        wp_register_style('example-plugin',plugin_dir_url(__FILE__) . '/welcome.css');
        wp_enqueue_style('example-plugin');



    }


}

My_Example_plugin::getInstance();

?>

