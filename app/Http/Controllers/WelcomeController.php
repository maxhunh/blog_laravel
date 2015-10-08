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
        return view('welcome.index');

    }

    /**
     * Display contact page for website
     *
     * @return Response
     */

    public function contact()
    {
        // return view contact in folder (other view ex: return redirect, post, resource, ...)
        return view('welcome.page.contact');
    }

     /**
     * Display about page for website
     *
     * @return Response
     */

    public function about()
    {
        $info = ['12','male','090 12342323'];
        return view('welcome.page.about', array('name'=>'Quach Huynh <span style="color: red;">Duc</span> <script>alert("hello");</script>','info'=>$info));
    }


}
