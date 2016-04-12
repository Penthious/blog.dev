<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showBlog()
	{
		return View::make('blog');
	}

	public function showMyBlog()
	{
		return Redirect::action('HomeController@showBlog');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showMyPortfolio()
	{
		return Redirect::action('HomeController@showPortfolio');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showMyResume()
	{
		return Redirect::action('HomeController@showResume');
	}


	public function rollDice($roll = 1, $min = 1, $max = 6)
	{
		$random_roll = mt_rand($min, $max);
		$data = [
			'roll' => $roll,
			'random_roll' => $random_roll
		];
			return View::make('roll_dice')->with($data);
	}

}
