<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//top one does the same as the bottom one.
Route::get('/', 'HomeController@showBlog');
Route::get('/blog', 'HomeController@showMyBlog');

Route::get('/resume', 'HomeController@showResume');
Route::get('/myresume', 'HomeController@showMyResume');

Route::get('/portfolio', 'HomeController@showPortfolio');
Route::get('/myportfolio', 'HomeController@showMyPortfolio');

Route::get('/rolldice/{roll?}/{min?}/{max?}', 'HomeController@rollDice');
