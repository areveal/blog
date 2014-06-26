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
Route::get('/', function(){
	return View::make('hello');
});

Route::get('/resume', function(){
	return "This will eventually be my resume";
});

Route::get('/portfolio', function(){
	return "This will eventually be my portfolio";
});

Route::get('/sayhello/{name}', function($name)
{
    if (strtolower($name) == "cole")
    {
        return Redirect::to('/');
    }
    else
    {
    	$data = ['name' => ucfirst($name)];
        return View::make('temp.my-first-view')->with($data);
    }
});

Route::get('/rolldice', function(){
	$roll = mt_rand(1,6);
	return View::make('temp.rolldice')->with('roll',$roll);
});

Route::get('/rolldice/{guess}', function($guess){
	$roll = mt_rand(1,6);
	$data = ['roll'=>$roll,
			 'guess'=>$guess];
	return View::make('temp.rolldice')->with($data);
});