<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    protected $table = 'recipes';



    function ingredients(){
    	return $this->belongsToMany('App\Ingredient')->withTimeStamps();
    }

    function recipeToIngredient(){
    	return $this->hasMany('App\Recipe_Ingredient', 'recipe_id', 'id');
    }
}


