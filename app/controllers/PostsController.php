<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
		$this->beforeFilter('admin', array('except' => array('index', 'show')));
	}

	public function index()
	{
		$search = Input::get('search');
		if (is_null($search)) {
			$posts = Post::with('user')
			->orderBy('created_at', 'desc')
			->paginate(4);
		}else {
			$posts = Post::with('user')
				->where('title', 'like', "%$search%")
				->orWhere('body', 'like',"%$search%")
				->orderBy('created_at', 'desc')
				->paginate(4);

		}
		$links = Post::select(DB::raw('month(created_at) AS month') , DB::raw('year(created_at) AS year'))
			->groupBy('month', 'year')
			->get();

		return View::make('posts.index', [
			'posts' => $posts,
			'achiveLinks' => $links
		]);
	}
	public function archive()
	{
		$year = Input::get('year');
		$month = Input::get('Month');
		$posts = Post::with('user')
		->orderBy('created_at', 'desc');
		if (! is_null($year)) {
			$posts->where(DB::raw('year(created_at)'), '=', $year );
		}
		if (! is_null($month)) {
			$posts->where(DB::raw('month(created_at)'), '=', $month );
		}
		$links = Post::select(DB::raw('month(created_at) AS month') , DB::raw('year(created_at) AS year'))
			->groupBy('month', 'year')
			->get();


		return View::make('posts.index', [
			'posts' => $posts->paginate(4),
			'achiveLinks' => $links
		]);
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create', ['edit' => false]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();

		return $this->validation($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = $this->postIsNull($id);
		return View::make('posts.show', [
			'post' => $post
		]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = $this->postIsNull($id);
		return View::make('posts.create',[
			'post' => Post::find($id),
			'edit' => true
		]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = $this->postIsNull($id);
		return $this->validation($post);

	}

	public function validation($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		// attempt validation
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Unable to save post.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			Session::flash('successMessage', 'The post was successfully update.');
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->user_id = User::first()->id;
			$post->save();
			Log::info(['title'=>$post->title, 'body'=>$post->body, 'user_id'=>$post->user_id]);
			return Redirect::action('PostsController@show',$post->id);
		}
	}

	public function postIsNull($id){
		$post = Post::find($id);
		if (is_null($post)) {
			App::abort(404);
		}
		return $post;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = $this->postIsNull($id);

		if (! $post) {
			return Redirect::action('PostsController@index');
		}

		$post->delete();
		Session::flash('successMessage', 'The post was successfully deleated.');
		return Redirect::action('PostsController@index');
	}



}
