<?php

class UsersController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('show')));
	    // run auth filter before create, store and delete
	    $this->beforeFilter('admin', array('except' => array('show', 'edit', 'update')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$users = User::with('posts')->orderBy('id','asc')->get();

		return View::make('users.index')->with('users',$users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::user()->role == 'admin') {
			return View::make('users.create-edit');
		}
		else {
			Session::flash('errorMessage','You do not have the necessary priveleges to edit this post.');
			return Redirect::action('PostsController@index');
		}
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
	public function show($id)
	{
		$user = User::with('posts')->findOrfail($id);

		return View::make('users.show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		if(Auth::user()->id == $user->id || Auth::user()->role == 'admin') {
			return View::make('users.create-edit')->with('user', $user);
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
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->fails()) 
		{
			Session::flash('errorMessage','The changes could not be submitted. Please see errors below.');
			return Redirect::back()->withInput()->withErrors($validator);
		} 
		else 
		{			
			$user = new User();

			if(isset($id)) 
			{
				$user = User::findOrfail($id);
			}			

			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->role = Input::get('role');
			$user->save();
			if(Input::hasFile('img') && Input::file('img')->isValid()) {
				$user->upload(Input::file('img'));
				$user->save();
			}
			Session::flash('successMessage','Your user update was successful.');
			return Redirect::action('UsersController@show',$user->id);
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
		$user = User::findOrfail($id);
		$user->delete();
		Session::flash('successMessage','The User was deleted successfully.');
		return Redirect::action('UsersController@index');
	}


}
