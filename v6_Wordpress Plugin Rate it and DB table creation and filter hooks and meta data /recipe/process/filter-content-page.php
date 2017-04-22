<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22/4/17
 * Time: 1:43 AM
 */
function rs_filter_content_page($content){


//    if(!is_singular('recipe ')){
//
//        return $content;
//
//    }

    //The Above condition isSingular is only applicable for singular post and not for all post
    //So when we were going to page where many post were there ..it was throwing error

    if(get_post_type()!='recipe'){
        return $content;
    }

    global $post;
    $recipe_data=get_post_meta($post->ID,'recipe_data',true);

    $recipe_html= file_get_contents('recipe-template.php',true);

    $recipe_html = str_replace("INGRIDIENTS_PH",$recipe_data['ingredients'],$recipe_html);
    $recipe_html = str_replace("COOKING_TIME_PH",$recipe_data['inputTime'],$recipe_html);
    $recipe_html = str_replace("UTENSILS_PH",$recipe_data['inputUtensil'],$recipe_html);
    $recipe_html = str_replace("LEVEL_PH",$recipe_data['inputLevel'],$recipe_html);
    $recipe_html = str_replace("TYPE_PH",$recipe_data['inputMealType'],$recipe_html);

    $recipe_html = str_replace("INGRIDIENTS_I18N",__('Ingredients','recipe'),$recipe_html);
    $recipe_html = str_replace("COOKING_TIME_I18N",__('Cooking time','recipe'),$recipe_html);
    $recipe_html = str_replace("UTENSILS_I18N",__('Utensils','recipe'),$recipe_html);
    $recipe_html = str_replace("LEVEL_I18N",__('Level','recipe'),$recipe_html);
    $recipe_html = str_replace("TYPE_I18N",__('Type','recipe'),$recipe_html);

    $recipe_html = str_replace('RECIPE_ID',$post->ID,$recipe_html);



    return $content . $recipe_html;


}