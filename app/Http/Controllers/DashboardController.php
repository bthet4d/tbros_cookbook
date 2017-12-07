<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use Auth;

class DashboardController extends Controller
{
    //
    function displayDashboard(){
    	$recipes = Recipe::with(['recipeToIngredient'])->get();
    	return view('dashboard', array(
    		'recipes' => $recipes
		));
    }
}
