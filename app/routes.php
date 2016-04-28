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
Route::get('/', 'PostsController@index');
Route::get('/blog', 'HomeController@showMyBlog');
Route::get('/archive', 'PostsController@archive');

Route::get('/resume', 'HomeController@showResume');
Route::get('/myresume', 'HomeController@showMyResume');

Route::get('/portfolio', 'HomeController@showPortfolio');
Route::get('/myportfolio', 'HomeController@showMyPortfolio');

Route::get('/rolldice/{roll?}/{min?}/{max?}', 'HomeController@rollDice');

Route::get('/simplesimon', 'HomeController@showSimon');
Route::get('/whackamole', 'HomeController@showWhachaMole');
Route::get('/weathermap', 'HomeController@showWeatherMap');
Route::get('/calculator', 'HomeController@showCalculator');
Route::get('/tictactoe', 'HomeController@showTicTacToe');
Route::post('/email', 'HomeController@doContact');
Route::get('/emailform', 'HomeController@setUpEmail');

Route::get('/posts/author/{user_id}', 'PostsController@getAuthorWithPosts');

Route::resource('users', 'UsersController');

Route::get('/login', 'UsersController@showLogin');

Route::post('/login/check', 'UsersController@doLogin');

Route::get('/logout', 'UsersController@logout');


// Route::get('/posts', 'PostsController@index');
// Route::get('/posts/create', 'PostsController@create');
// Route::post('/posts', 'PostsController@store');
// Route::get('/posts/{post}', 'PostsController@show');
// Route::get('/posts/{post}/edit', 'PostsController@edit');
// Route::put('/posts/{post}', 'PostsController@update');
// Route::delete('/posts/{post}', 'PostsController@delete');

//the seven above are the same as bellow
Route::resource('posts', 'PostsController');
