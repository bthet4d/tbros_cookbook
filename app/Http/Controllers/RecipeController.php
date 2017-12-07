<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;

class RecipeController extends Controller
{
    //
    public function displayForm($value='')
    {
    	# code...
        Log::info('displaying add recipe form');
    	return view('addRecipe');

    }

    public function createRecipe(Request $request)
    {
    	# code...
    	$req = $request->all();
        dd($req);
		$this->validate($request, [
			'author' => 'required',
			'title' => 'required'
		]);

		return 'success';
    }
}
