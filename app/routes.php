<?php

Event::listen('illuminate.query', function($sql, $bindings, $time){
  Log::debug($sql);
  Log::debug(implode($bindings, ', '));
});

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
Route::get('/', 'HomeController@showHome');

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

Route::get('login','HomeController@showLogIn');

Route::post('login','HomeController@doLogIn');

Route::get('logout','HomeController@logout');

Route::resource('users', 'UsersController');

Route::resource('posts', 'PostsController');

