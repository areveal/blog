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

//route for home page
Route::get('', 'HomeController@showHome');

//route for resume
Route::get('resume', 'HomeController@showResume');

//route for portfolio
Route::get('portfolio', 'HomeController@showPortfolio');

//route for whack-a-mole
Route::get('whack', 'HomeController@showWhack');

//route for contacts
Route::get('contact', 'HomeController@showContact');

//route for contact addresses
Route::get('contact-addresses', 'HomeController@showContactAddresses');

Route::resource('posts', 'PostsController');

Route::get('/orm-test', function(){
	$post = Post::find(2);

	$post->delete();

	return "Done";

});

Route::get('hello', 'HomeController@showWelcome');

Route::get('sayhello/{name}', 'HomeController@sayHello');

Route::get('rolldice', function(){
	$roll = mt_rand(1,6);
	return View::make('temp.rolldice')->with('roll',$roll);
});

Route::get('rolldice/{guess}', function($guess){
	$roll = mt_rand(1,6);
	$data = ['roll'=>$roll,
			 'guess'=>$guess];
	return View::make('temp.rolldice')->with($data);
});
