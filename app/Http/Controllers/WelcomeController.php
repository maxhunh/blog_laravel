<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        /**
         * Return string html
         * '<p>I am index page</p>
         *  <p><a href="/contact">Contact page</a></p>';
         */
        return view('welcome');

    }

    /**
     * Display contact page for website
     *
     * @return Response
     */

    public function contact()
    {
        // return view contact in folder (other view ex: return redirect, post, resource, ...)
        return view('page.contact');
    }


}
