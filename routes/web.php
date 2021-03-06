<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DashboardController@displayDashboard');
Route::get('/addRecipe', 'RecipeController@displayForm');
Route::get('/favorites', 'FavoritesController@showFavorites');

Event::listen('illuminate.query', function($query)
{
    var_dump($query);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('register/facebook', 'Auth\RegisterController@redirectToProvider');
// Route::get('register/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('logout', 'Auth\LoginController@logout');
