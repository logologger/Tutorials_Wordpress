<?php


function ju_admin_init(){

    include('enqueue.php');
    include(get_template_directory() . '/process/save-options.php');

    add_action('admin_enqueue_scripts','ju_admin_enqueue');
    add_action("admin_post_ju_save_options","ju_save_options");

}

?>