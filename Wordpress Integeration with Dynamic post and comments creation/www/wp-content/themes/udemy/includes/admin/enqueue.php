<?php

function ju_admin_enqueue(){

    if(!isset($_GET['page']) || $_GET['page']!='ju_theme_opts'){
        return ;
    }


    wp_register_style('ju_bootstrap',get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('ju_bootstrap');


}

?>