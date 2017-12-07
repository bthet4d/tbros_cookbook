<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Recipe;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RecipeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRecipe()
    {
    	$recipes = Recipe::all();
    	
        $this->assertEquals(count($recipes), 1);
    }
}