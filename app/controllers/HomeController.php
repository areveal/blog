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

	//show blog home page
	public function showHome()
	{
		return View::make('home');
	}
	//show blog resume
	public function showResume()
	{
		return View::make('resume');
	}
	//show portfolio
	public function showPortfolio()
	{
		return View::make('portfolio');
	}	
	//show whack-a-mole project
	public function showWhack()
	{
		return View::make('whack');
	}
	//show contact book
	public function showContact()
	{
		return View::make('contacts.contact');
	}
	//show adddress book
	public function showContactAddresses()
	{
		return View::make('contacts.contact-addresses');
	}	

	public function showLogIn()
	{
		return View::make('log-in');
	}

	public function doLogIn()
	{
		if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
			Session::flash('successMessage','You were logged in successfully.');
			return Redirect::intended(action('PostsController@index'));
		}
		else 
		{
			Session::flash('errorMessage','The email or password was not found.');
			return Redirect::action('HomeController@showLogIn');
		}
	}

	public function logout() 
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

	// create add commenting feature
	public function addComment($id) 
	{

		$validator = Validator::make(Input::all(), Comment::$rules);

		if($validator->fails()) 
		{
			Session::flash('errorMessage','We could not post your comment. Please see errors below.');
			return Redirect::back()->withInput()->withErrors($validator);
		} 
		else 
		{
			$comment = new Comment();
			$comment->name = Input::get('name');
			$comment->body = Input::get('body');
			$comment->post_id = $id;
			$comment->save();	
			Session::flash('successMessage','Your comment was posted.');	
			return Redirect::action('PostsController@show',$id);
		}
	}


}
