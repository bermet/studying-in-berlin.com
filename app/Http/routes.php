<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('news.index');
});


Route::get('/studying', function () {
    return view('news.studying');
});

Route::get('/music', function() {
	return view('music.index');
});

Route :: get('/job',function()
{return view('job.index');

})

Route :: get('/job',function()
{return view('job.index');

})