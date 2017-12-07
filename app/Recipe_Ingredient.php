<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe_Ingredient extends Model
{
    //
    protected $table = 'ingredient_recipe';

    function recipeToIngredient(){
    	return $this->belongsToMany('App\Recipe', 'id', 'recipe_id');
    }
}
