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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/about', function()
{
	return View::make('hello');
});

Route::get('/new', function() {

    $view  = '<form method="POST">';
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});

Route::post('/new', function() {

    $input =  Input::all();
    print_r($input);

});

Route::get('flights/{day_of_week}', function($day_of_week)
{
	$days = array('monday', 'tuesday');

	if(in_array(strtolower($day_of_week), $days)) {
		return "Here are the flights departing on $day_of_week...";
	}
	else {
		return "invalid day";
	}

	
});