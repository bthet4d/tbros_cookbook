<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    protected $table = 'ingredients';

    public function recipeIngredients(){
    	return $this->belongsToMany('App\Recipe')->withTimeStamps();
    }
}
