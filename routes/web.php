<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Guest routes
Route::group(['middleware' => 'guest'], function ()
{
	// Home
	Route::get('/', \App\Http\Controllers\HomeController::class);
});
