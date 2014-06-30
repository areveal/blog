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
		return View::make('temp.resume');
	}
	//show portfolio
	public function showPortfolio()
	{
		return View::make('temp.portfolio');
	}	
	//show whack-a-mole project
	public function showWhack()
	{
		return View::make('temp.whack');
	}
	//show contact book
	public function showContact()
	{
		return View::make('temp.contact');
	}
	//show adddress book
	public function showContactAddresses()
	{
		return View::make('temp.contact-addresses');
	}	

	public function showWelcome()
	{
		// return View::make('hello');
		return Redirect::action('HomeController@sayHello','Codeup');
	}

	public function sayHello($name) {
		$data = ['variable' => ucfirst($name)];
		return View::make('temp.my-first-view')->with($data);
	}
}
