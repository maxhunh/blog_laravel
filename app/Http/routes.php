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


// NOTE: Routes for static page
Route::get('/contact', function () {
    return view('static_page/contact');
});

Route::get('/about', function () {
    return view('static_page/about');
});

// NOTE: Routes for homepage
Route::get('/', function () {
    return view('welcome');
});

// NOTE: Routes for pages
Route::get('/page','PagesController@index');
Route::get('/page/about','PagesController@about');
Route::get('/page/contact','PagesController@contact');

// NOTE: Routes for products
// Route::get('products','ProductsController@index');
// Route::get('products/create','ProductsController@create');
// Route::post('products','ProductsController@store');

Route::resource('products', 'ProductsController');

