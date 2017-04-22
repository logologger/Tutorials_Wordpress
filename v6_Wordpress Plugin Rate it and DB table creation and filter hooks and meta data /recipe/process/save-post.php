<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22/4/17
 * Time: 12:36 AM
 */

function r_save_post_admin($post_id,$post,$update){

    //post_id is the id of the post
    //actual post
    //update or newly created post

    if(!$update){
        return;
    }

    $recipe_data = array();

    $recipe_data['ingredients']=sanitize_text_field($_POST['r_inputIngredients']);
    $recipe_data['inputTime']=sanitize_text_field($_POST['r_inputTime']);
    $recipe_data['inputUtensil']=sanitize_text_field($_POST['r_inputUtensils']);
    $recipe_data['inputLevel']=sanitize_text_field($_POST['r_inputLevel']);
    $recipe_data['inputMealType']=sanitize_text_field($_POST['r_inputMealType']);

    update_post_meta($post_id,'recipe_data',$recipe_data);


}