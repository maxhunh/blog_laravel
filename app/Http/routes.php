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


// Routes for static page
Route::get('/contact', function () {
    return view('static_page/contact');
});

Route::get('/about', function () {
    return view('static_page/about');
});

// Routes for homepage
Route::get('/', function () {
    return view('welcome');
});

// Routest for pages
Route::get('/page','PagesController@index');
Route::get('/page/about','PagesController@about');
Route::get('/page/contact','PagesController@contact');


