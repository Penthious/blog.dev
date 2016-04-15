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

    public function email()
	{
		$data = [
			'title' =>'Test',
			'content' =>'Test content'
		];
		Mail::send('emails.welcome', $data, function($message)
		{
		    $message
			    ->from('montealegreluis@gmail.com', 'Luis')
				->to('montealegreluis@gmail.com', 'Luis Smith')
				->subject('Welcome!');
		});
	}

	public function showBlog()
	{
		return View::make('projects.blog');
	}

	public function showMyBlog()
	{
		return Redirect::action('HomeController@showBlog');
	}

	public function showPortfolio()
	{
		$projects = [
			['/img/simplesimon.png','Simple Simon', 'Simple Simon built out of jquery and css.',"HomeController@showSimon"],
        ['/img/tictactoe.png','Tic Tac Toe', 'Tic Tac Toe built out of Vanilla javascript and css.','HomeController@showTicTacToe'],['/img/calculator.png','Calculator', 'Calculator built out of Vanilla javascript and css.','HomeController@showCalculator'],    ['/img/whackamole.png','Whack a Mole', 'Whack a Mole built out of jquery and css.','HomeController@showWhachaMole'],
            ['/img/weathermap.png','Weather Map', 'Weather Map built out of jquery, css, google api and weather api.','HomeController@showWeatherMap']
		];
		return View::make('projects.portfolio', ['projects' => $projects]);
	}

	public function showMyPortfolio()
	{

		return Redirect::action('HomeController@showPortfolio');
	}

	public function showResume()
	{
		return View::make('projects.resume');
	}

	public function showMyResume()
	{
		return Redirect::action('HomeController@showResume');
	}

	public function showSimon()
	{
		return View::make('projects.simplesimon');
	}

	public function showWhachaMole()
	{
		return View::make('projects.whackamole');
	}

	public function showWeatherMap()
	{
		return View::make('projects.weathermap');
	}

	public function showCalculator()
	{
		return View::make('projects.calculator');
	}

	public function showTicTacToe()
	{
		return View::make('projects.tictactoe');
	}


	public function showSimpleSimon()
	{
		return Redirect::action('HomeController@showSimon');
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
