<?php
/*
Plugin Name:Movie Review Plugin
Plugin URI: http://wordpress.org/plugins/rajat/
Description:  Nothing can be done now.I dont know what to do here
Author: Rajat Bhadauria
Version: 1.7
Author URI:rajat.net
*/
class Movie_review_plugin{

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
        add_action('init','Movie_review_plugin::register_post_type');

    }

    static function register_post_type(){
        register_post_type('movie-review',array(
            'labels' =>array(
                'name'=>__('Movie Reviews'),
                'singular_name'=>__('Movie Reviews')
            ),
            'description'=>__('Highly opinionated movie reviews'),
            'supports' =>array(
                'title','editor','excerpt','author','revisions','thumbnail','custom-fields'
            ),
            'public'=>TRUE,
            'menu_icon'=>'dashicons-format-video',
            'menu_position'=>1


        ));
    }

    static function activate(){

        self::register_post_type();

        flush_rewrite_rules();

    }



}

Movie_review_plugin::getInstance();

register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'Movie_review_plugin::activate' );


?>
