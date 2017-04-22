<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/4/17
 * Time: 11:15 PM
 */

function recipe_admin_init(){


    //Create Meta boxes after the admin Section gets loaded
    //Admin section get inited then this function will get called
    include('create-meta-boxes.php');
    include('enqueue.php');

    add_action('add_meta_boxes_recipe','rs_create_metaboxes');
    //Add Meta Boxes to custom post type

    add_action('admin_enqueue_scripts','rs_admin_enqueue');




}