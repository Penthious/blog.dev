<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$login_info = [
			['first_name', 'First Name'],
			['last_name', 'Last Name'],
			['password', 'Password'],
			['ver_password', 'Confirm Password'],
			['email', 'Email'],
			['username', 'Username']
		];
		return View::make('user.create',['login_info' => $login_info]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User();

		return $this->validation($user);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function validation($user)
	{
		$validator = Validator::make(Input::all(), User::$rules);

		// attempt validation
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Unable to create user.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			if (Input::get('password') === Input::get('ver_password')) {
				$user->password = Input::get('password');
			} else {
				Session::flash('errorMessage', 'Your passwords did not match');
				return Redirect::back()->withInput();
			}
			Session::flash('successMessage', 'The post was successfully update.');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->password = Input::get('password');
			$user->email = Input::get('email');
			$user->role = 'user';
			$user->save();
			//Log::info(['title'=>$user->title, 'body'=>$user->body, 'user_id'=>$user->user_id]);
			return Redirect::action('PostsController@index',$user->id);
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::back();
	}

	public function showLogin()
	{
		return View::make('user.login');
	}

	public function doLogin()
	{
		$validator = Validator::make(Input::all(), User::$loggedInRules);

		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		}

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
			return Redirect::back();
		}
		else {
			return Redirect::back();
		}
	}



}
