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


// Define GET routes for contact page
Route::get('/contact', function () {
    return view('ContactController@contact');
});

Route::get('/', function () {
    return view('welcome');
});

