<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/4/17
 * Time: 11:33 PM
 */

function rs_recipe_options_mb($post){

    $recipe_data = get_post_meta($post->ID,'recipe_data',true);

    //Check for $recipe_Data not to be null

    if(!$recipe_data){
        $recipe_data = array(

                'ingredients'=>'',
                'inputTime'  =>'',
                'inputUtensil' =>'',
                'inputLevel'  =>'',
                'inputMealType' =>''

        );
    }


    ?>
    <div class="form-group">
        <label>Ingredients</label>
        <input type="text" class="form-control" name="r_inputIngredients" value="<?php echo $recipe_data['ingredients']?>">
    </div>
    <div class="form-group">
        <label>Cooking Time</label>
         <input type="text" class="form-control" name="r_inputTime" value="<?php echo $recipe_data['inputTime'] ?>">
    </div>
    <div class="form-group">
        <label>Cooking Utensils</label>
        <input type="text" class="form-control" name="r_inputUtensils" value="<?php echo $recipe_data['inputUtensil']?>">
    </div>
    <div class="form-group">
        <label>Cooking Level</label>
        <select class="form-control" name="r_inputLevel" value="<?php echo $recipe_data['inputLevel']?>">
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Experienced">Experienced</option>

        </select>
    </div>

    <div class="form-group">
    <label>Meal Type</label>
    <input type="text" class="form-control" name="r_inputMealType" value="<?php echo $recipe_data['inputMealType']?>">
    </div>



<?php
}