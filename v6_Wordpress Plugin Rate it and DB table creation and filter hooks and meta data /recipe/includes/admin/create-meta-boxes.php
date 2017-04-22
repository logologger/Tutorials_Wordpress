<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/4/17
 * Time: 11:28 PM
 */

function rs_create_metaboxes(){

    include('recipe_options.php');

    add_meta_box(
        'r_recipe_options_mb',
            __('Recipe options','recipe'),//This one is title ..Making it translable
        'rs_recipe_options_mb',
        'recipe',
        'normal',
        'high'


    );


}