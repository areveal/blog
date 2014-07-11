<?php

class PostsController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		if(Input::has('search')) {
			$search = Input::get('search');
			$posts = Post::with('user')->where('title','LIKE', "%{$search}%")->orderBy('updated_at','desc')->paginate(2);
		} else {
			$posts = Post::with('user')->orderBy('updated_at','desc')->paginate(2);
		}

		return View::make('posts.index')->with('posts',$posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('posts.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		return $this->update(null);


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$post = Post::findbySlug($slug);

		return View::make('posts.show')->with('post',$post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		if(Auth::user()->id == $post->user->id || Auth::user()->role == 'admin') {
			return View::make('posts.create-edit')->with('post',$post);
		}
		else {
			Session::flash('errorMessage','You do not have the necessary priveleges to edit this post.');
			return Redirect::action('PostsController@index');
		}

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) 
		{
			Session::flash('errorMessage','We could not create your post. Please see errors below.');
			return Redirect::back()->withInput()->withErrors($validator);
		} 
		else 
		{
			$post = new Post();
			
			if(isset($id)) 
			{
				$post = Post::findOrfail($id);
				if(Auth::user()->id != $post->user->id || Auth::user()->role != 'admin') 
				{
						Session::flash('errorMessage','You do not have the necessary credentials to edit this post.');
						return Redirect::back();
				}
			}
			

			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->user_id = Auth::user()->id;
			$post->slug = Input::get('title');
			$post->save();
			if(Input::hasFile('img') && Input::file('img')->isValid()) {
				$post->upload(Input::file('img'));
				$post->save();
			}
			Session::flash('successMessage','Your post was successful.');
			return Redirect::action('PostsController@show',$post->id);	
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrfail($id);
		$post->delete();
		Session::flash('successMessage','Your Post was deleted successfully.');
		return Redirect::action('PostsController@index');
	}




}
